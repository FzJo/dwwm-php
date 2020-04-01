<?php

namespace App\Form;

use App\Entity\User;

class UserForm
{

    private EmailForm $emailForm;

    private PasswordForm $passwordForm;

    private array $error;

    public function __construct(User $entity)
    {
        $this->emailForm = new EmailForm($entity->getEmail());
        $this->passwordForm = new PasswordForm($entity->getPassword());
        $this->error = [
            "name" => false
        ];
        $name = filter_input(INPUT_POST, "name");
        if (null !== $name) {
            $entity->setName($name);
            if (!$name) {
                $this->error["name"] = "Le champ ne doit pas être vide";
            }
        }
    }

    /**
     * @return EmailForm
     */
    public function getEmailForm(): EmailForm
    {
        return $this->emailForm;
    }

    /**
     * @return PasswordForm
     */
    public function getPasswordForm(): PasswordForm
    {
        return $this->passwordForm;
    }

    /**
     * @return array
     */
    public function getError(): array
    {
        return $this->error;
    }

}