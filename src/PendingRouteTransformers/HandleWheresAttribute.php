<?php

namespace Fluent\RouteDiscovery\PendingRouteTransformers;

use Fluent\RouteDiscovery\Attributes\Where;
use Fluent\RouteDiscovery\PendingRoutes\PendingRoute;
use Fluent\RouteDiscovery\PendingRoutes\PendingRouteAction;
use Illuminate\Support\Collection;

class HandleWheresAttribute implements PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions->each(function (PendingRouteAction $action) use ($pendingRoute) {
                if ($pendingRouteWhereAttribute = $pendingRoute->getAttribute(Where::class)) {
                    $action->addWhere($pendingRouteWhereAttribute);
                }

                if ($actionWhereAttribute = $action->getAttribute(Where::class)) {
                    $action->addWhere($actionWhereAttribute);
                }
            });
        });

        return $pendingRoutes;
    }
}
