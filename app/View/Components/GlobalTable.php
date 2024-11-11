<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GlobalTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $items;
    public $dataType;
    public $fields;
    public $actions;
    public $extra;

    public function __construct($items, $dataType='default', $fields = [], $actions = true,$extra=[])
    {
        $this->items = $items;
        $this->dataType = $dataType;
        $this->fields = $fields;
        $this->actions = $actions;
        $this->extra = $extra;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.global-table');
    }
}
