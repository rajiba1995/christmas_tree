<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;

class UpdateDataByModal extends Component
{
    public $recordId;
    public $name;

    protected $listeners = ['openUpdateModal' => 'loadRecord'];

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function loadRecord($id)
    {
        $this->recordId = $id;
        $record = State::findOrFail($id);
        $this->name = $record->name;
    }

    public function update()
    {
        $this->validate();

        $record = State::findOrFail($this->recordId);
        $record->update([
            'name' => $this->name,
        ]);

        // Emit an event to notify that the update was successful and close the modal
        $this->emit('recordUpdated');
    }

    public function render()
    {
        return view('livewire.update-data-by-modal');
    }
}
