<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // PASTIKAN SEMUA FIELD DARI FORM ADA DI SINI
        $validated = $request->validate([
            'recipient_name' => 'required|string|max:255',
            'phone'          => 'required|string|max:255',
            'province'       => 'required|string|max:255',
            'city'           => 'required|string|max:255',
            'district'       => 'required|string|max:255',
            'postal_code'    => 'required|string|max:255',
            'detail'         => 'required|string',
        ]);

        $user = Auth::user();
        $user->addresses()->update(['is_primary' => 0]);

        // Gunakan $validated untuk keamanan
        $address = $user->addresses()->create(array_merge($validated, [
            'is_primary' => 1
        ]));

        // Kembalikan response JSON jika berhasil
        return response()->json(['id' => $address->id, 'message' => 'Alamat berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
