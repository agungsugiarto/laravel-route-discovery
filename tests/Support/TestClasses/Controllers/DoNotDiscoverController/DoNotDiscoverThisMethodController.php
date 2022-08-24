<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverController;

use Fluent\RouteDiscovery\Attributes\DoNotDiscover;

class DoNotDiscoverThisMethodController
{
    public function method()
    {
    }

    #[DoNotDiscover]
    public function doNotDiscoverMethod()
    {
    }
}
