<?php

namespace App\DTOs;

class HelloDTO
{
    public function __construct(
        public string $message,
        public string $version,
    ) {}
}