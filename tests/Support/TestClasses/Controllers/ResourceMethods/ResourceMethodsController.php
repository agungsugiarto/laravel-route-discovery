<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\ResourceMethods;

use Fluent\RouteDiscovery\Tests\Support\TestClasses\Models\User;
use Illuminate\Http\Request;

class ResourceMethodsController
{
    public function index()
    {
    }

    public function show(User $user)
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function edit(User $user)
    {
    }

    public function update(User $user)
    {
    }

    public function destroy(User $user)
    {
    }
}
