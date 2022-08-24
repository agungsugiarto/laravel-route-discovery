<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\DefaultRouteName;

use Fluent\RouteDiscovery\Attributes\Route;
use Illuminate\Foundation\Auth\User;

class DefaultRouteNameController
{
    public function method()
    {
    }

    public function edit(User $user)
    {
    }

    #[Route(name: 'special-name')]
    public function specialMethod()
    {
    }
}
