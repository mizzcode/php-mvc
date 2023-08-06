<?php

namespace Mizz\Belajar\PHP\MVC\Middleware;

class AuthMiddleware implements Middleware
{
    function before():void
    {
        session_start();
        if (($_SESSION['login']) != true)
        {
            header('Location: /login');
            exit();
        }
    } 
}