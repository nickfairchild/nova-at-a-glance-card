<?php

namespace Nickfairchild\AtAGlance;

use Laravel\Nova\Card;

class AtAGlance extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Exclude Resources from the card
     *
     * @param array $resources
     * @return $this
     */
    public function excludeResources(array $resources)
    {
        $this->withMeta([
            'excludes' => $resources
        ]);

        return $this;
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'at-a-glance';
    }
}
