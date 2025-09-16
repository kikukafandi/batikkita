<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view("auth.login");
    }
    public function  registerPage(Request $request)
    {
        return view("auth.register");
    }
    public function login(Request $request) {
        $validated = $request->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);
        $user = User::where("email", $validated["email"])->first();
        if ($user && Hash::check($validated["password"], $user->password)) {
            Auth::login($user);
            return redirect()->route("homePage");
        } else {
            return redirect()->route("loginPage")->with("error", "Email atau password salah");
        }
    }

    public function register(Request $request)
    {
        // Tambahkan password_confirmation dari confirmPassword jika belum diubah
        $request->merge(['password_confirmation' => $request->confirmPassword]);

        $rules = [
            'firstName' => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'nullable|string|max:20',
            'userType'  => 'required|in:buyer,seller',
            'password'  => 'required|min:8|confirmed',
        ];

        if ($request->userType === 'seller') {
            $rules += [
                'storeName'        => 'required|string|max:255',
                'storeAddress'     => 'required|string',
                'storeDescription' => 'nullable|string',
            ];
        }

        $validated = $request->validate($rules);
        $user = User::create([
            'name'     => $validated['firstName'] . ' ' . $validated['lastName'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => $validated['userType'], // langsung isi 'buyer' / 'seller'
        ]);

        // Jika seller, masukkan ke tabel sellers
        if ($user->role === 'seller') {
            $user->sellers()->create([
                'store_name'        => $validated['storeName'],
                'store_description' => $validated['storeDescription'] ?? null,
                // address/logo/banner bisa ditambah
            ]);
        }

        return redirect()->route('loginPage')->with('success', 'Registrasi sukses! Silahkan login.');
    }

}
