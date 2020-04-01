<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserForm;

class UserController
{

    public function createUser()
    {
        $entity = new User();
        $form = new UserForm($entity);
        include __DIR__ . "/../../templates/user/signup.html.php";
    }

    public function updateUser()
    {
    }

    public function suspendUser()
    {
    }

}
