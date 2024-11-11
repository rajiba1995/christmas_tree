<?php
// app/View/Components/InputField.php
namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $name;
    public $value;
    public $placeholder;
    public $ariaLabel;
    public $class;
    public $size;
    public $disabled;
    public $readonly;

    public function __construct(
        string $type,
        string $name,
        string $value = '',
        string $placeholder = '',
        string $ariaLabel = '',
        string $class = '',
        string $size = 'md',
        bool $disabled = false, // Change to bool
        bool $readonly = false   // Change to bool
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->ariaLabel = $ariaLabel;
        $this->class = $class;
        $this->size = $size;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    public function render()
    {
        return view('components.input-field');
    }
}
