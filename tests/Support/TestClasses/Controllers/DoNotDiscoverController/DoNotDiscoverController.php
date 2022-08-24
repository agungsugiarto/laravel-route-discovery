<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverController;

use Fluent\RouteDiscovery\Attributes\DoNotDiscover;

#[DoNotDiscover]
class DoNotDiscoverController
{
    public function doNotDiscoverThisController()
    {
    }
}
