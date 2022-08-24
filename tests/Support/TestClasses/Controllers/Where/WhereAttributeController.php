<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\Where;

use Fluent\RouteDiscovery\Attributes\Where;
use Illuminate\Foundation\Auth\User;

class WhereAttributeController
{
    #[Where('user', Where::uuid)]
    public function edit(User $user)
    {
    }
}
