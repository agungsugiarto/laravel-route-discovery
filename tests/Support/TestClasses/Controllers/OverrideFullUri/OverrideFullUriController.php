<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideFullUri;

use Fluent\RouteDiscovery\Attributes\Route;

class OverrideFullUriController
{
    #[Route(fullUri:'alternative-uri')]
    public function myMethod()
    {
    }
}
