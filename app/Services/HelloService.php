<?php

namespace App\Services;

use App\DTOs\HelloDTO;
use App\Models\Hello;

class HelloService
{
    public function getHello(): Hello
    {
        $dto = new HelloDTO(
            message: 'Hello World',
            version: 'v1',
        );

        return new Hello(
            message: $dto->message,
            version: $dto->version,
        );
    }
}