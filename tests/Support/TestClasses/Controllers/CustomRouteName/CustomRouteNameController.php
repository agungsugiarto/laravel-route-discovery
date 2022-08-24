<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\CustomRouteName;

use Fluent\RouteDiscovery\Attributes\Route;

class CustomRouteNameController
{
    #[Route(name:'this-is-a-custom-name')]
    public function index()
    {
    }
}
