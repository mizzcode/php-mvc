<?php

namespace Mizz\Belajar\PHP\MVC\Controller;

use Mizz\Belajar\PHP\MVC\App\View;

class HomeController {
    function index():void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Belajar PHP MVC ProgrammerZamanNow" 
        ];
        View::render("Home/index", $model);
    }
    
    function login():void
    {
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $request = [
            "username" => $_POST['username'],  
            "password" => $_POST['password']  
        ];
      }
        // response kirim ke view
        // $response = [
        //     "message" => "Login Success" 
        // ];
        View::render('login', $request);
    }
    
    function register():void
    {
        echo "HomeController.register()";
    }
    
    function logout():void
    {
        echo "HomeController.logout()";
    }
}