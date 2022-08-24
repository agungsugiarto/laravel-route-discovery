<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideHttpMethod;

use Illuminate\Foundation\Auth\User;
use Fluent\RouteDiscovery\Attributes\Route;

class OverrideHttpMethodController
{
    #[Route(method: 'delete')]
    public function edit(User $user)
    {
    }
}
