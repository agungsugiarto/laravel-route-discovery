<?php

namespace Fluent\RouteDiscovery;

use Fluent\RouteDiscovery\PendingRouteTransformers\AddControllerUriToActions;
use Fluent\RouteDiscovery\PendingRouteTransformers\AddDefaultRouteName;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleDomainAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleDoNotDiscoverAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleFullUriAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleHttpMethodsAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleMiddlewareAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleRouteNameAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleUriAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleUrisOfNestedControllers;
use Fluent\RouteDiscovery\PendingRouteTransformers\HandleWheresAttribute;
use Fluent\RouteDiscovery\PendingRouteTransformers\MoveRoutesStartingWithParametersLast;
use Fluent\RouteDiscovery\PendingRouteTransformers\RejectDefaultControllerMethodRoutes;

class Config
{
    /**
     * @return array<class-string>
     */
    public static function defaultRouteTransformers(): array
    {
        return [
            RejectDefaultControllerMethodRoutes::class,
            HandleDoNotDiscoverAttribute::class,
            AddControllerUriToActions::class,
            HandleUrisOfNestedControllers::class,
            HandleRouteNameAttribute::class,
            HandleMiddlewareAttribute::class,
            HandleHttpMethodsAttribute::class,
            HandleUriAttribute::class,
            HandleFullUriAttribute::class,
            HandleWheresAttribute::class,
            AddDefaultRouteName::class,
            HandleDomainAttribute::class,
            MoveRoutesStartingWithParametersLast::class,
        ];
    }
}
