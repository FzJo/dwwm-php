<?php

namespace App\Entity;

class Password
{
    
    private int $id;
    
    private string $value;
    
    private PasswordToken $passwordToken;
    
    public function __construct()
    {
        $this->passwordToken = new PasswordToken;
    }
    
}
