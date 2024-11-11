<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class CommonRepository
{
    // City
    public function getAllCity()
    {
        return City::all();
    }
    public function getAllActiveCity()
    {
        return City::where('status', 1)->get();
    }
    public function getALlActiveLeadSatus(){
        return DB::table('leads_status')->where('status', 1)->orderBy('position', 'ASC')->get();
    }
    // State
    public function getAllState(int $perPage = 15)
    {
        return State::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveState()
    {
        return State::where('status', 1)->get();
    }

    public function createState(array $data){
        $state = new State;
        $state->name = ucwords($data['name']);
        $state->save();
        return $state;
    }
    public function deleteState($id){
        $state = State::findOrFail($id);
        $state->delete();
        return $state;
    }
   
}
