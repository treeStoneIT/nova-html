<?php

namespace Treestoneit\Html;

use Laravel\Nova\Fields\Field;

class Html extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'html';

    /**
     * Indicates if the element should be shown on the edit pages.
     *
     * @var bool
     */
    public $showOnCreation = false;
    public $showOnUpdate = false;


}
