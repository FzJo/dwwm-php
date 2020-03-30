<?php

namespace App\Controller;

class UserController
{
    
    public function __construct()
    {
    }
            
    public function createUser()
    {
        include __DIR__ . "/../../templates/user/signup.html.php";
    }

    public function updateUser()
    {
        echo "updateUser";
    }

    public function suspendUser()
    {
        echo "suspendUser";
    }

}
