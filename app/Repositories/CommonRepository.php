<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use App\Models\Division;
use App\Models\SeasionPlan;
use App\Models\Category;
use App\Models\Ammenity;


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
    public function getAllHotelSeasionPlan(){
        return SeasionPlan::orderBy('title', 'ASC')->get();
    }
    
    public function storeHotelSeasionPlan(array $data){
        $sessionPlan  = new SeasionPlan;
        $sessionPlan->title = $data['title'];
        $sessionPlan->plan_item = implode(', ', array_map('strtoupper', $data['plan_item']));
        $sessionPlan->save();
        return $sessionPlan;
    }

    public function updateHotelSeasionPlan(array $data){
        $sessionPlan  = SeasionPlan::findOrFail($data['id']);
        $sessionPlan->title = $data['title'];
        $sessionPlan->plan_item = implode(', ', array_map('strtoupper', $data['plan_item']));
        $sessionPlan->save();
        return $sessionPlan;
    }
    public function getHotelSeasionPlanById($id){
        return SeasionPlan::where('id', $id)->first();
    }
    public function deleteSeasionPlan($id){
        $sessionPlan = SeasionPlan::findOrFail($id);
        $sessionPlan->delete();
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

    // Ammenity
    public function getAllAmmenity(int $perPage = 15)
    {
        return Ammenity::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveAmmenity()
    {
        return Ammenity::where('status', 1)->get();
    }

    public function createAmmenity(array $data){
       $ammenity = new Ammenity;
       $ammenity->name = ucwords($data['name']);
       $ammenity->save();
       return $ammenity;
   }

   public function deleteAmmenity($id){
       $ammenity =Ammenity::findOrFail($id);
       $ammenity->delete();
       return $ammenity;
   }
}
