<?php

namespace Rafael\PhpEstudos;

use InvalidArgumentException;

final class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->validateEmail($email);
        $this->email = $email;
    }

    private function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("O e-mail fornecido não é válido.");
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
