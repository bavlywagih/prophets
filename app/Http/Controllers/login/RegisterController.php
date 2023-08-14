<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function register_view() {
    return view('login.register');
  }

    public function register(Request $request)
        {
            
            $validated = $request->validate([
                'name' => ['required', 'min:3', 'max:40'],
                'name_arabic' => ['required', 'min:3', 'max:40'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'confirmed', 'min:8', 'max:120'],
                'remember' => ['boolean']
            ]);

            // dd($validated['name-arabic']);
            $user = User::create([
                'name' => $validated['name'],
                'name_arabic' => $validated['name_arabic'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);


            Auth::login($user, $validated['remember']);
            return redirect()->route('index');
        }

}
