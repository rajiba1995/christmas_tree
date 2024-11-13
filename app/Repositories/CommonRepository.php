<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use App\Models\Division;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CommonRepository
{
    // City
    public function getAllCity($perPage)
    {
        return City::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveCity()
    {
        return City::where('status', 1)->get();
    }

    public function createCity(array $data){
        $division = new City;
        $division->name = ucwords($data['name']);
        $division->state_id = ucwords($data['state_id']);
        $division->save();
        return $division;
    }


    public function deleteCity($id){
        $city = City::findOrFail($id);
        $city->delete();
        return $city;
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
   

    public function getAllDivision(int $perPage = 15)
    {
        return Division::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveDivision()
    {
        return Division::where('status', 1)->get();
    }

   
    public function deleteDivision($id){
        $division = Division::findOrFail($id);
        $division->delete();
        return $division;
    }


     // Category
     public function getAllCategory(int $perPage = 15)
     {
         return Category::orderBy('name', 'ASC')->paginate($perPage);
     }
     public function getAllActiveCategory()
     {
         return Category::where('status', 1)->get();
     }

     public function createCategory(array $data){
        $category = new Category;
        $category->name = ucwords($data['name']);
        $category->save();
        return $category;
    }

    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return $category;
    }

   
 
}
