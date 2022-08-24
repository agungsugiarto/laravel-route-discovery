---
title: Using route transformers
weight: 1
---

Under the hood, the package will build up a collection of `Fluent\RouteDiscovery\PendingRoutes\PendingRoute` instances by looking at the controllers and views in your project. This collection of `PendingRoutes` can be modified by a `PendingRouteTransformer`. After that, each `action` inside a `PendingRoute` will be registered as a regular Laravel route.

In the `route-discovery` config file you'll see the registered route transformers.

```php
// in config/route-discovery.php

/*
 * After having discovered all controllers, these classes will manipulate the routes
 * before registering them to Laravel.
 *
 * In most cases, you shouldn't change these.
 */
'pending_route_transformers' => [
    ...Fluent\RouteDiscovery\Config::defaultRouteTransformers(),
    //
],
```

This is the returned value of `Fluent\RouteDiscovery\Config::defaultRouteTransformers()`:

```php
[
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleDoNotDiscoverAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\AddControllerUriToActions::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleUrisOfNestedControllers::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleRouteNameAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleMiddlewareAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleHttpMethodsAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleUriAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleFullUriAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleWheresAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\AddDefaultRouteName::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\HandleDomainAttribute::class,
    Fluent\RouteDiscovery\PendingRouteTransformers\MoveRoutesStartingWithParametersLast::class,
];
```

These transformers will handle specific `Route` attributes, make sure the routes are registered in the correct orders, ... 

## Creating your own route transformer

You can create your own route transformer by letting a class implement the `Fluent\RouteDiscovery\PendingRouteTransformers\PendingRouteTransformer` interface. Here's how that interface looks like:

```php
use Illuminate\Support\Collection;
use Fluent\RouteDiscovery\PendingRoutes\PendingRoute;

interface PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection;
}
```

After you've created your transformer, register it in the `pending_route_transformers` key of the `route-discovery` config file.

Take a look at one of the default route transformers for an example implementation.
