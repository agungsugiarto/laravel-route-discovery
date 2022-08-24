<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverMethod;

use Fluent\RouteDiscovery\Attributes\DoNotDiscover;

class DoNotDiscoverMethodController
{
    public function method()
    {
    }

    #[DoNotDiscover]
    public function doNotDiscoverMethod()
    {
    }
}
