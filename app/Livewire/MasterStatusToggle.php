<?php
namespace App\Livewire;

use Livewire\Component;

class MasterStatusToggle extends Component
{
    public $item;
    public $status;
    public $modelName;

    public function mount(string $modelName, $item) 
    {
        $this->item = $item;
        $this->status = $item->status;
        $this->modelName = $modelName;
    }

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->item->update(['status' => $this->status]);
    }

    public function render()
    {
        return view('livewire.master-status-toggle');
    }
}
