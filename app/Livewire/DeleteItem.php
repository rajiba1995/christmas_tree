<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SeasionPlan;  // Import your model

class DeleteItem extends Component
{
    public $itemId;
    public $action_type;
    public $model;

    public function mount($itemId, $action_type, $model)
    {
        $this->itemId = $itemId;
        $this->action_type = $action_type;
        $this->model = $model;
    }

    public function delete()
    {
        // Resolve model dynamically based on the passed model name
        $model = app("App\\Models\\{$this->model}"); // Dynamically resolve model class

        $item = $model::find($this->itemId);

        if ($item) {
            $item->delete();  // Or use $item->delete() for soft deletes
            session()->flash('message', "{$this->model} deleted successfully.");
            $this->emit('removeRow', $this->itemId);
        } else {
            session()->flash('error', "{$this->model} not found.");
        }
    }
    public function render()
    {
        return view('livewire.delete-item');
    }
}
