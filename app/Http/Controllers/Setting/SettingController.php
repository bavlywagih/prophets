<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\user;




class SettingController extends Controller
{
    public function Setting($id){
        $user = user::findorfail($id);
        return view('components.setting.settings' , ['user' => $user]);
    }

    public function Setting_update(Request $request , $id){
        $validated = $request->validate([
            'name_arabic' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
        ]);


        if($request->password == null){
            DB::table('users')->where('id', $id)->update([
                'name_arabic' =>  $validated['name_arabic'],
                'name' =>  $validated['name'],
                'email' => $validated['email'],
            ]);
            return redirect()->route('Profile' , ['id' => $id]);


        }
        else{
            if (Hash::check($request->password, auth()->user()->password)) {
                return redirect()->back()->withErrors(['password' => ' لم يتم تغير الباسورد!']);
            } 
            else{
                DB::table('users')->where('id',$id)->update([
                    'name_arabic' =>  $validated['name_arabic'],
                    'name' =>  $validated['name'],
                    'email' => $validated['email'],
                    'password' => Hash::make($request->password),
                ]);
            return redirect()->route('Profile' , ['id' => $id]);
            }
        }

            

        

    }

}
