<?php

namespace App\Entity;

class UserRole
{
    
    private int $id;
    private User $user;
    private Role $role;
        
    public function __construct()
    {
        $this->user = new User;
        $this->role = new Role;
    }
    
}
