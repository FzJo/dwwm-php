<?php

namespace App\Entity;

class Email
{
    
    private int $id;
    
    private string $value;
        
    public function __construct()
    {
        $this->id = 0;
        $this->value = "";
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
    
}
