<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pengguna', compact('users'));
    }

    public function create(Request $request)
    {
        User::create([
            'name'     => $request['name'],
            'gender'   => $request['gender'],
            'nik'      => $request['nik'],
            'no_hp'    => $request['no_hp'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('pengguna')->with('success', 'User berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
