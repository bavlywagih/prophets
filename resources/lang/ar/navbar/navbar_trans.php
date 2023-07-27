<?php
    if(Auth()->check() == 'true' ){
        $name = Auth()->user()->name_arabic  ;
        $nameArray = explode(" ", $name );
        $nameuser = $nameArray[0];
        $name_arabic = $nameuser;
    }else{
        $name_arabic = ' ';
    }

return [
    'menu' => 'القائمة',
    'name' => $name_arabic,
    'settings' => 'الاعدادات',
    'profile' => 'الصفحة الشخصية',
    'register' => 'انشاء حساب',
    'logout' => 'تسجيل خروج',
    'login' => 'تسجيل دخول',
    'old_testament_prophets' => 'انبياء العهد القديم',
    'sequence_old_testament_prophets' => ' تسلسل انبياء العهد القديم ',
    'home' => 'الصفحة الرئيسية',
    'contact' => 'التواصل',
];