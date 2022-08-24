<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\Middleware;

use Fluent\RouteDiscovery\Attributes\Route;
use Fluent\RouteDiscovery\Tests\Support\TestClasses\Middleware\TestMiddleware;

class MiddlewareOnMethodController
{
    #[Route(middleware: TestMiddleware::class)]
    public function extraMiddleware()
    {
    }

    public function noExtraMiddleware()
    {
    }
}
