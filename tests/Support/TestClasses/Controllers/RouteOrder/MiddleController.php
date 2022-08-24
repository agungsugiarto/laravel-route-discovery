<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\RouteOrder;

use Fluent\RouteDiscovery\Attributes\Route;

class MiddleController
{
    #[Route(fullUri: '{parameter}/extra')]
    public function invoke()
    {
    }
}
