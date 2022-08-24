<?php

namespace Fluent\RouteDiscovery\PendingRouteTransformers;

use Fluent\RouteDiscovery\PendingRoutes\PendingRoute;
use Fluent\RouteDiscovery\PendingRoutes\PendingRouteAction;
use Illuminate\Support\Collection;

class AddControllerUriToActions implements PendingRouteTransformer
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
                $originalActionUri = $action->uri;

                $action->uri = $pendingRoute->uri;

                if ($originalActionUri) {
                    $action->uri .= "/{$originalActionUri}";
                }
            });
        });

        return $pendingRoutes;
    }
}
