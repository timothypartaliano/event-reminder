<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //fungsi untuk menampilkan views register/index.blade.php
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'position' => Position::all()
        ]);
    }

    //fungsi untuk menyimpan data ke dalam tabel user dari form register/index.blade.php
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'position_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/')->with('success', 'Registration successfull! Please login');
    }
}
