<?php
    $name_arabic = Auth()->user()->name_arabic;
    $name = Auth()->user()->name;

    return [
        'setting' => 'الاعدادات',
        'username' => ' : الاسم  ',
        'username_arabic' => ' : الاسم  بالعربي',
        'email' => ' : البريد الالكتروني ',
        'password' => ': كلمة المرور',
        'place_password' => 'يجب كتابة كلمه مرور جديده',
        'name_arabic' => $name_arabic ,
        'name' => $name ,

    ];