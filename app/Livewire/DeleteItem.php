<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteItem extends Component
{
    public $item;
    public $modelName;

    public function mount(string $modelName, $item)
    {
        $this->item = $item;
        $this->modelName = $modelName;
    }

    public function confirmDelete()
    {
        // Delete the item directly without emit
        $modelClass = "App\\Models\\{$this->modelName}";
        $model = $modelClass::find($this->item->id);

        if ($model) {
            $model->delete();
            // Optional: Set a success message to display after deletion
            session()->flash('message', 'Item deleted successfully.');
        }
    }

    public function render()
    {
        return view('livewire.delete-item');
    }
}
