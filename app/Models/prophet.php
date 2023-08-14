<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prophet extends Model
{
    use HasFactory;
    protected $fillable = ['name_arabic', 'meaning_name_arabic', 'story_arabic' , 'name_english' , 'meaning_name_english', 'story_english', 'type', 'image'];
}
