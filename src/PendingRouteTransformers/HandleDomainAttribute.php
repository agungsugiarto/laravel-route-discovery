<?php

namespace Fluent\RouteDiscovery\PendingRouteTransformers;

use Illuminate\Support\Collection;
use Fluent\RouteDiscovery\PendingRoutes\PendingRoute;
use Fluent\RouteDiscovery\PendingRoutes\PendingRouteAction;

class HandleDomainAttribute implements PendingRouteTransformer
{
    public function transform(Collection $pendingRoutes): Collection
    {
        $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions->each(function (PendingRouteAction $action) use ($pendingRoute) {
                if ($pendingRouteAttribute = $pendingRoute->getRouteAttribute()) {
                    $action->domain = $pendingRouteAttribute->domain;
                }

                if ($actionAttribute = $action->getRouteAttribute()) {
                    $action->domain = $actionAttribute->domain;
                }
            });
        });

        return $pendingRoutes;
    }
}
