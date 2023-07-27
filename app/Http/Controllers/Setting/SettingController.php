<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class SettingController extends Controller
{
    public function Setting(){
        return view('components.setting.settings');
    }

    public function Setting_update(Request $request){
        $validated = $request->validate([
            'name_arabic' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
        ]);


        if($request->password == null){
            DB::table('users')->where('id', auth()->user()->id)->update([
                'name_arabic' =>  $validated['name_arabic'],
                'name' =>  $validated['name'],
                'email' => $validated['email'],
            ]);
            return redirect()->route('profile');


        }
        else{
            if (Hash::check($request->password, auth()->user()->password)) {
                return redirect()->back()->withErrors(['password' => ' لم يتم تغير الباسورد!']);
            } 
            else{
                DB::table('users')->where('id', auth()->user()->id)->update([
                    'name_arabic' =>  $validated['name_arabic'],
                    'name' =>  $validated['name'],
                    'email' => $validated['email'],
                    'password' => Hash::make($request->password),
                ]);

            }
        }

            

        

    }

}
