<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']); // rubah password biasa ke password yang sudah di enkripsi

        User::create($validatedData); // create data registrasi ke database

        session()->flash('success', 'Registration successfull! Please login'); // menampilkan pesan singkat dengan flash

        // dd(session()->all()); // cetak nilai sesi untuk memastikan pesan flash disimpan

        return redirect('/login'); 
    }
}
