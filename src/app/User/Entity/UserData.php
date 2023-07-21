<?php
namespace App\User\Entity;

final class UserData
{
    public function __construct(
        private ?int $id,
        private string $name,
        private string $email,
    ) {
        $this->id = $id;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}