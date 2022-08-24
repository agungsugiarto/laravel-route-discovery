<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideHttpMethod;

use Fluent\RouteDiscovery\Attributes\Route;
use Illuminate\Foundation\Auth\User;

class OverrideHttpMethodController
{
    #[Route(method: 'delete')]
    public function edit(User $user)
    {
    }
}
