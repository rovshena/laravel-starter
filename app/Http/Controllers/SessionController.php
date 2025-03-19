<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginUserRequest $request)
    {
        $attributes = $request->validated();

        dd($attributes);
    }
}
