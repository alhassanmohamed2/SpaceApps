<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function index(){
            
        return view('home');
    } 
 
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function projectshom(){
        $users_data = App::get('database')->selectAll('userdata');
        return view('projectsHome',['usersdata'=> $users_data ]);
    }
}