<?php

namespace App\Controllers;

use App\Core\App;

class AdminController
{
    public function auth(){
      
    
        if($_POST['email'] === App::get('config')['admin']['admin_email'] 
        && $_POST['pass'] === App::get('config')['admin']['admin_pass'])
        {
            $_SESSION["email"] = $_POST['email'];
            $_SESSION["pass"] = $_POST['pass'];
            redirect("dashboard");
        
        }else{
            echo "<script>alert('ايميل غير صحيح أو كلمة سر غير صحيحة')</script>";
            return view('admin');
        }
        
        
    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        redirect("");
    }
}