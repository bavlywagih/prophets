<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;


class ProfileController extends Controller
{
    public function profile($id){
        $user = user::findorfail($id);
        return view('profile.profile' , ['user' => $user]);
    }
}
