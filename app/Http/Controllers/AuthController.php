<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
    public function login(Request $request)
    {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required"
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
        // merge confirmPassword supaya cocok dengan validasi "confirmed"
        $request->merge(['password_confirmation' => $request->confirmPassword]);

        // rules umum
        $rules = [
            'firstName' => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'nullable|string|max:20',
            'userType'  => 'required|in:buyer,seller',
            'password'  => 'required|min:8|confirmed',
        ];

        // kalau seller, wajib ada storeName (alamat toko opsional → bisa simpan ke addresses)
        if ($request->userType === 'seller') {
            $rules += [
                'storeName'        => 'required|string|max:255',
                'storeDescription' => 'nullable|string',
                'storeAddress'     => 'nullable|string', // ini kita pakai untuk simpan ke addresses
            ];
        }

        $validated = $request->validate($rules);

        // buat user
        $user = User::create([
            'name'     => $validated['firstName'] . ' ' . $validated['lastName'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => $validated['userType'],
            'phone'    => $validated['phone'] ?? null,
        ]);

        // kalau seller → buat toko
        if ($user->role === 'seller') {
            $seller = $user->sellers()->create([
                'store_name'        => $validated['storeName'],
                'store_description' => $validated['storeDescription'] ?? null,
            ]);

            // kalau ada alamat toko → simpan ke tabel addresses
            if (!empty($validated['storeAddress'])) {
                Address::create([
                    'user_id'        => $user->id,
                    'recipient_name' => $validated['firstName'] . ' ' . $validated['lastName'],
                    'phone'          => $validated['phone'] ?? '',
                    'province'       => '-',       // isi sesuai form kalau sudah ada
                    'city'           => '-',
                    'district'       => '-',
                    'postal_code'    => '00000',
                    'detail'         => $validated['storeAddress'],
                    'is_primary'     => true,
                ]);
            }
        }

        return redirect()->route('loginPage')
            ->with('success', 'Registrasi sukses! Silakan login.');
    }

    
}
