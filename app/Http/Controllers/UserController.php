<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserForm;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        }
    }
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(RegisterUserForm $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('home');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->all();
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        } else {
            unset($data['password']);
        }
        $user->update($data);

        return redirect()->route('user.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
