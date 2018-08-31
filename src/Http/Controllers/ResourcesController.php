<?php

namespace Nickfairchild\AtAGlance\Http\Controllers;

use Laravel\Nova\Nova;
use Illuminate\Http\Request;

class ResourcesController
{
    public function __invoke(Request $request)
    {
        $availableResources = array_diff(Nova::availableResources($request), $request->excludes);

        $items = [];
        foreach ($availableResources as $resource) {
            $count = $resource::$model::all()->count();
            $label = $count === 1 ? $resource::singularLabel() : $resource::label();
            $items[$resource] = [
                'count' => $count,
                'label' => $label,
                'uri' => $resource::uriKey(),
            ];
        }

        return $items;
    }
}
