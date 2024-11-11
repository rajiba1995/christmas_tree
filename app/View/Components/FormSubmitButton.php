<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSubmitButton extends Component
{
    public $text;
    public $class;

    public function __construct($text = 'Submit', $class = 'ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave me-[0.375rem]')
    {
        $this->text = $text;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.form-submit-button');
    }
}
