<?php

namespace Fluent\RouteDiscovery\Tests\Support\TestClasses\Controllers\NestedWithParametersController;

use Fluent\RouteDiscovery\Tests\Support\TestClasses\Models\Photo;

class PhotosController
{
    public function show(Photo $photo)
    {
    }

    public function edit(Photo $photo)
    {
    }
}
