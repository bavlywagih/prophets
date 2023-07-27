<?php

namespace App\Http\Controllers\Prophets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prophet;

class ProphetsController extends Controller
{

    public function Prophets(){
        $prophets = prophet::orderBy('id', 'desc')->get()   ;
        return view('Prophets.index.Prophets' , [
            'prophets' => $prophets,
        ]);
    }

    public function Prophets_create(){
        return view('Prophets.create.create');
    }

    public function Prophets_create_post(Request $request){
        if($request->image == null){
            $validated = $request->validate([
                'name_arabic' =>['required'],
                'meaning_name_arabic' =>['required'],
                'story_arabic' =>['required'],
                'name_english' =>['required'],
                'meaning_name_english' =>['required'],
                'story_english' =>['required'],
            ]);
            prophet::create([
                'name_arabic' =>  $validated['name_arabic'],
                'meaning_name_arabic' =>  $validated['meaning_name_arabic'],
                'story_arabic' =>  $validated['story_arabic'],
                'name_english' => $validated['name_english'],
                'meaning_name_english' =>  $validated['meaning_name_english'],
                'story_english' =>  $validated['story_english'],
            ],);
            return redirect()->route("Prophets");
        }
        else {
            $validated = $request->validate([
                'name_arabic' =>['required'],
                'meaning_name_arabic' =>['required'],
                'story_arabic' =>['required'],
                'name_english' =>['required'],
                'meaning_name_english' =>['required'],
                'story_english' =>['required'],
                'image' =>['required'],
            ]);
            
            $image_extension = $validated['image']->getClientOriginalExtension();
            $imagename = '/' . time() . '.' . $image_extension;
            $path = 'image/prophets';
            $image = $validated['image']->move($path, $imagename);
            prophet::create([
                'name_arabic' =>  $validated['name_arabic'],
                'meaning_name_arabic' =>  $validated['meaning_name_arabic'],
                'story_arabic' =>  $validated['story_arabic'],
                'name_english' => $validated['name_english'],
                'meaning_name_english' =>  $validated['meaning_name_english'],
                'story_english' =>  $validated['story_english'],
                'image' =>  'http://127.0.0.1:8000'. '/' . $path . $imagename,
            ],);
            return redirect()->route("Prophets");
        }
    }
    public function Prophet_show($id){
        $prophet = prophet::find($id);
        return view('prophets.show.show_prophet' , [
            'prophet' => $prophet,
        ]);
    }
    
}
