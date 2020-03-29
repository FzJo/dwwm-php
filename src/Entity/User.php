<?php

namespace App\Entity;

class User
{
    
    private int $id;
    
    private string $name;

    private Email $email;
    
    private Password $password;
        
    public function __construct()
    {
        $this->email = new Email;
        $this->password = new Password;
    }
    

    public function createUser()
    {

        echo "Create user";

    }

}
