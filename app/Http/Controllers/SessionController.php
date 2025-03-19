<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginUserRequest $request)
    {
        $attributes = $request->validated();

        if (! Auth::attempt($attributes)) {
            return back()
                ->withErrors(['email' => 'The provided credentials do not match our records.'])
                ->withInput(['email' => $attributes['email']]);
        }

        $request->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
