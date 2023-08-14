<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function login_post(Request $request){
        // dd($request);
        $validated = $request->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required'],
            // 'remember' => ['boolean']
        ]);
        $user = User::where('email', $validated['email'])->first();
        // dd($user->password);

        if (!Hash::check($validated['password'], $user->password)) {
            return redirect()->back()->withErrors(['password' => 'The entered password is wrong!']);
        }
        Auth::login($user);
        return redirect()->route('index');
    }
}
// $validated['remember']