<?php

namespace Nickfairchild\AtAGlance\Http\Controllers;

use Laravel\Nova\Nova;
use Illuminate\Http\Request;

class ResourcesController
{
    public function __invoke(Request $request)
    {
        if (is_array($request->excludes)) {
            $availableResources = array_diff(Nova::availableResources($request), $request->excludes);
        } else {
            $availableResources = Nova::availableResources($request);
        }

        $items = [];
        foreach ($availableResources as $resource) {
            $count = $resource::$model::count();
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
