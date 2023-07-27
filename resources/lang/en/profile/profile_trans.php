<?php
    $name = Auth()->user()->name  ;

    if (Auth()->user()->role != 0) {
        $condition = 'admin';
    }
    else{
        $condition = 'user';
    }
    return [
        'profile' => 'profile',
        'username' => 'username :',
        'email' => 'email :',
        'condition' => 'condition :',
        'the_condition' => $condition ,
        'name' => $name ,

    ];