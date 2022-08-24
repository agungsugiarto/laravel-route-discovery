<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\RouteOrder;

use Fluent\RouteDiscovery\Attributes\Route;

class AAAController
{
    #[Route(fullUri: '{parameter}')]
    public function invoke()
    {
    }
}
