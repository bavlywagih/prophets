<?php
    if(Auth()->check() == 'true' ){
        $name = Auth()->user()->name  ;
        $nameArray = explode(" ", $name );
        $nameuser = $nameArray[0];
        $name_english  = $nameuser;
        $AuthName = Auth()->user()->name;
    }else{
        $name_english  = ' ';
        $AuthName  = ' ';
    }
    
    return [
        'menu' => 'menu',
        'name' => $name_english ,
        'AuthName' => $AuthName ,
        'settings' => 'settings' ,
        'profile' => 'profile',
        'register' => 'register',
        'logout' => 'logout',
        'login' => 'login',
        'old_testament_prophets' => 'Old Testament Prophets',
        'sequence_old_testament_prophets' => ' Sequence Old Testament Prophets',
        'home' => 'home ',
        'users' => 'users',
        'contact' => 'contact',

    ];