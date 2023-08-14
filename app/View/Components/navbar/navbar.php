<?php

namespace App\View\Components\navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\LaravelLocalization;

class navbar extends Component
{
    public string|null $AuthLitter;
    public string|null $AuthName;
    public string|null $adminRole;
    public string|null $userRole;
    public string|null $profile;
    public string $menu;
    public string $sequence_prophets;
    public string $index;
    public string $users;
    public string $logout;
    public string $register;
    public string $login;
    public string $Prophets;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        if(Auth()->check() == 'true' ){
            $profile = route('Profile' ,  Auth()->user()?->id );
        }

        $this->adminRole = Auth()->user()?->role == 1;
        $this->userRole = Auth()->user()?->role == '0';
        $this->AuthLitter = trans('navbar/navbar_trans.name');
        $this->AuthName = trans('navbar/navbar_trans.AuthName');
        $this->menu = trans('navbar/navbar_trans.menu');
        $this->sequence_prophets = trans('navbar/navbar_trans.sequence_old_testament_prophets');
        $this->profile = Auth()->check() ? $profile : null;
        $this->index = route('index');
        $this->users = route('users');
        $this->logout = route('logout');
        $this->register = route('register_view');
        $this->login = route('login');
        $this->Prophets = route('Prophets');
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('navbar.navbar');
    }
}
