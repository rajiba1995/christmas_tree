<?php
namespace App\View\Components;

use Illuminate\View\Component;

class SelectField extends Component
{
    public $name;
    public $options;
    public $selected;
    public $class;
    public $ariaLabel;
    public $selectedText; // New property for placeholder text

    public function __construct(string $name, array $options, string $selected = '', string $class = '', string $ariaLabel = '', string $selectedText = 'Select an option')
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->class = $class;
        $this->ariaLabel = $ariaLabel;
        $this->selectedText = $selectedText; // Assign the new property
    }

    public function render()
    {
        return view('components.select-field');
    }
}
