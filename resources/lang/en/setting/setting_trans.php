<?php
    $name_arabic = Auth()->user()->name_arabic  ;
    $name = Auth()->user()->name  ;

    return [
        'setting' => 'setting',
        'username' => 'username :',
        'username_arabic' => 'name arabic :',
        'email' => 'email :',
        'password' => 'password :',
        'place_password' => 'You must type a new password',
        'name_arabic' => $name_arabic ,
        'name' => $name ,

    ];