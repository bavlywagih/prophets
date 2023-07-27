<?php
    if(Auth()->check() == 'true' ){
        $name = Auth()->user()->name  ;
        $nameArray = explode(" ", $name );
        $nameuser = $nameArray[0];
        $name_english  = $nameuser;
    }else{
        $name_english  = ' ';
    }
    
    return [
        'menu' => 'menu',
        'name' => $name_english ,
        'settings' => 'settings' ,
        'profile' => 'profile',
        'register' => 'register',
        'logout' => 'logout',
        'login' => 'login',
        'old_testament_prophets' => 'Old Testament Prophets',
        'sequence_old_testament_prophets' => ' Sequence Old Testament Prophets',
        'home' => 'home ',
        'contact' => 'contact',

    ];