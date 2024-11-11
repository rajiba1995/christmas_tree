<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormField extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $name;
    public $label;
    public $value;
    public $options;
    public $attributes;
    public function __construct($type, $name, $label = '', $value = null, $options = [], $attributes = [])
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->options = $options; // For select or radio options
        $this->attributes = $attributes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-field');
    }
}
