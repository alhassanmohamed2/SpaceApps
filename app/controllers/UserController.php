<?php 

namespace App\Controllers;

use App\Core\App;

class UserController
{
    public function signup(){
        if
        (!App::get('database')->selectOne('userlogin',['email' => $_POST['email']])){
            App::get('database')->insert('userlogin',['email'=>$_POST['email'], 'password' => $_POST['password']]);
            return view("home");
        }else{
            return view('signup');
        }
    }
    public function login(){
        if (App::get('database')->selectOne('userlogin',['email' => $_POST['email'], 'password'=>$_POST['password']])){
            
            redirect('');
        }else{
            return view('login');
        }
    }

    public function details(){
        App::get('database')->insert('userdata', [
            'userlogin_id' => '1',
            'name' => $_POST['name'],
            'githubLink' => $_POST['github'],
            'linkedinLink' => $_POST['linkedin'],
            'bio' => $_POST['bio'],
             'role' => $_POST['project'],
             'skills' =>var_export($_POST['skills'], true),
             'subskills' =>var_export($_POST['subSkills'],true)
        ]);
        redirect('');
    }
}