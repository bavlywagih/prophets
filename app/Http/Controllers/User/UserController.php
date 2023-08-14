<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users(){
        $users =  User::where('role', 'like', '%' . 0 . '%')->get();
        return view('users.show.users' , ['users' => $users ]);
    }
}
