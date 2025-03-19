<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $attributes = $request->validated();

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
