<?php

namespace Fluent\RouteDiscovery\PendingRouteTransformers;

use Illuminate\Support\Collection;
use Fluent\RouteDiscovery\PendingRoutes\PendingRoute;
use Fluent\RouteDiscovery\PendingRoutes\PendingRouteAction;

class HandleHttpMethodsAttribute implements PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions->each(function (PendingRouteAction $action) {
                if (! $routeAttribute = $action->getRouteAttribute()) {
                    return;
                }

                if (! $httpMethods = $routeAttribute->methods) {
                    return;
                }

                $action->methods = $httpMethods;
            });
        });

        return $pendingRoutes;
    }
}
