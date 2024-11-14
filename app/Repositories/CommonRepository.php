<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use App\Models\Division;
use App\Models\SeasionPlan;
use App\Models\Category;
use App\Models\Amenity;

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
    // Hotel Seasion Plan
    public function getAllHotelSeasionPlan(int $perPage = 10){
        return SeasionPlan::orderBy('title', 'ASC')->paginate($perPage);
    }
    
    public function storeHotelSeasionPlan(array $data){
        $sessionPlan  = new SeasionPlan;
        $sessionPlan->title = $data['title'];
        $sessionPlan->plan_item = implode(', ', array_map('strtoupper', $data['plan_item']));
        $sessionPlan->save();
        return $sessionPlan;
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

    // Amenity
    public function getAllAmenity(int $perPage = 15)
    {
        return Amenity::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveAmenity()
    {
        return Amenity::where('status', 1)->get();
    }

    public function createAmenity(array $data){
       $amenity = new Amenity;
       $amenity->name = ucwords($data['name']);
       $amenity->save();
       return $amenity;
   }

   public function deleteAmenity($id){
       $amenity = Amenity::findOrFail($id);
       $amenity->delete();
       return $amenity;
   }
}
