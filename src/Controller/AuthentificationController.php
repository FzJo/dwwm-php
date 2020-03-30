<?php

namespace App\Controller;

class AuthentificationController
{
    
    public function __construct()
    {
    }
            
    public function login()
    {
        include "../templates/authentification/login.html.php";
    }  
    
    public function logout()
    {
        echo "logout";
    }

}
