<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\SeasionPlan;

class SeasionPlanTable extends Component
{
    public $seasionPlans;

    public function mount()
    {
        $this->seasionPlans = SeasionPlan::orderBy('position')->get();  // Load the plans sorted by position
    }

    public function updateOrder($order)
    {
        foreach ($order as $index => $id) {
            SeasionPlan::where('id', $id)->update(['position' => $index + 1]);
        }

        // Refresh the list after updating the order
        $this->seasionPlans = SeasionPlan::orderBy('position')->get();
    }
    
    public function render()
    {
        return view('livewire.seasion-plan-table');  // Render the component view
    }
}

