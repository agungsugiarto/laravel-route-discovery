<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\Where;

use Illuminate\Foundation\Auth\User;
use Fluent\RouteDiscovery\Attributes\Where;

class WhereAttributeController
{
    #[Where('user', Where::uuid)]
    public function edit(User $user)
    {
    }
}
