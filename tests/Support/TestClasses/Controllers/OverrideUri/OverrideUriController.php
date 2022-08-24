<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideUri;

use Fluent\RouteDiscovery\Attributes\Route;

class OverrideUriController
{
    #[Route(uri:'alternative-uri')]
    public function myMethod()
    {
    }
}
