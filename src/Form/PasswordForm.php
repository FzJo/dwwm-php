<?php

namespace App\Form;

use App\Entity\Password;

class PasswordForm
{

    private array $error;

    public function __construct(Password $entity)
    {
        $this->error = [
            "password" => false,
            "password_confirmation" => false,
        ];
        $password = filter_input(INPUT_POST, "password");
        $passwordConfirmation = filter_input(INPUT_POST, "password_confirmation");
        if (null !== $password) {
            $entity->setValue($password);
            if (!$password) {
                $this->error["password"] = "Le champ ne doit pas être vide";
            }
            if (!$passwordConfirmation) {
                $this->error["password_confirmation"] = "Le champ ne doit pas être vide";
            }
        }
    }

    /**
     * @return array
     */
    public function getError(): array
    {
        return $this->error;
    }

}