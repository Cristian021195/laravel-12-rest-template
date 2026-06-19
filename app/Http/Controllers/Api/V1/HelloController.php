<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\HelloService;
use App\Http\Controllers\Controller;
use App\Http\Resources\HelloResource;

class HelloController extends Controller
{
    public function __construct(
        protected HelloService $service
    ) {}

    public function index(): HelloResource
    {
        $hello = $this->service->getHello();

        return new HelloResource($hello);
    }
}