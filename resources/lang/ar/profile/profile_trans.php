<?php
    $name = Auth()->user()->name_arabic;
    if (Auth()->user()->role != 0) {
        $condition = 'مسؤول';
    }
    else{
        $condition = 'مستخدم';
    }
    return [
        'profile' => 'الصفحه الشخصية',
        'username' => ' : الاسم ',
        'email' => ' : البريد الالكتروني ',
        'condition' => ' : الحاله ',
        'the_condition' => $condition ,
        'name' => $name ,

    ];