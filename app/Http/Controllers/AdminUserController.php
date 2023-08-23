<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data tabel user ke views dashboard/users/index.blade.php
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.users.index', [
            'users' => User::all(),
            "name" => "All Users",
            "users" => User::latest()->filter(request(['search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data tabel users ke views dashboard/users/create.blade.php
    public function create()
    {
        return view('dashboard.users.create', [
            'position' => Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menyimpan data ke dalam tabel dari form dashboard/users/create.blade.php
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'position_id' => 'required',
            // 'position' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data dari tabel user ke views dashboard/users/edit.blade.php
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'position' => Position::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menyimpan data ke dalam tabel dari form dashboard/users/create.blade.php
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'position_id' => 'required',
            // 'position' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ];

        if($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }

        if($request->email != $user->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menghapus data didalam tabel user
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}
