<?php

namespace App\Form;

use App\Entity\Email;

class EmailForm
{

    private array $error;

    public function __construct(Email $entity)
    {
        $this->error = [
            "email" => false
        ];
        $email = filter_input(INPUT_POST, "email");
        if (null !== $email) {
            $entity->setValue($email);
            if (!$email) {
                $this->error["email"] = "Le champ ne doit pas être vide";
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