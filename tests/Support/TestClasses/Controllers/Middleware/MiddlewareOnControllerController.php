<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\Middleware;

use Fluent\RouteDiscovery\Attributes\Route;
use Fluent\RouteDiscovery\Tests\Support\TestClasses\Middleware\OtherTestMiddleware;
use Fluent\RouteDiscovery\Tests\Support\TestClasses\Middleware\TestMiddleware;

#[Route(middleware: TestMiddleware::class)]
class MiddlewareOnControllerController
{
    public function oneMiddleware()
    {
    }

    #[Route(middleware: OtherTestMiddleware::class)]
    public function twoMiddleware()
    {
    }
}
