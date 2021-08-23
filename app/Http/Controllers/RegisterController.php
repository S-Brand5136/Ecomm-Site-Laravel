<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'max:255', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
