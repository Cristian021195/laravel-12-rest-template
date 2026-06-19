<?php
namespace App\Models;

class Hello
{
    public function __construct(
        public string $message,
        public string $version,
    ) {}
}