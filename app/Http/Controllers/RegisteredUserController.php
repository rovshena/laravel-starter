<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $attributes = $request->validated();

        dd($attributes);
    }
}
