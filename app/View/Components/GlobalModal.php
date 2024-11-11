<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GlobalModal extends Component
{
    public $id;
    public $type;
    public $title;
    public $content;
    public $statuses;
    public $formAction;
    public $formMethod;
    public $formButton;
    public $selectedStatus;
    public $value;
    public function __construct(
        $id,
        $type,
        $title,
        $content = null,
        $statuses = [],
        $formAction = '',
        $formMethod = 'POST',
        $formButton = 'Submit',
        $selectedStatus = null,
        $value = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->content = $content;
        $this->statuses = $statuses;
        $this->formAction = $formAction;
        $this->formMethod = $formMethod;
        $this->formButton = $formButton;
        $this->selectedStatus = $selectedStatus;
        $this->value = $value;
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.global-modal');
    }
}
