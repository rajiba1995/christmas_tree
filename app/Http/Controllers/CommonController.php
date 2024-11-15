<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Helpers\CustomHelper;
use Illuminate\Validation\Rule;

class CommonController extends Controller
{
    protected $commonRepository;

    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
    }
    // State Master
    public function state_index(){
        $states = $this->commonRepository->getAllState(10);
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Destinations(States)');
        return view('admin.state.index', array_merge(compact('states'), $common));
    }

    public function state_store(Request $request){
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('states', 'name')->whereNull('deleted_at'), // Ignore soft-deleted records
            ],
        ], [
            'name.required' => 'Please enter destination name.',
            'name.unique' => 'This destination name already exists.',
        ]);
        try {
            $this->commonRepository->createState($validatedData);
            return redirect()->back()->with('success', 'Destination created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function state_destroy($id){
        try {
            $this->commonRepository->deleteState($id);
            return redirect()->route('admin.state.index')->with('success', 'Destination deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // Division Master
    public function division_index(){
        $divisions = $this->commonRepository->getAllCity(10);
        $destinations = $this->commonRepository->getAllState();
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Division(City)');
        return view('admin.division.index', array_merge(compact('divisions','destinations'), $common));
    }

    public function division_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:cities,name',
            'state_id' => 'required',
        ], [
            'name.required' => 'Please enter division name.',
            'state_id.required' => 'Please enter destination name.',
            'name.unique' => 'This division name already exists.',
        ]);
        try {
            $this->commonRepository->createCity($validatedData);
            return redirect()->back()->with('success', 'Division created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function division_destroy($id){
        try {
            $this->commonRepository->deleteCity($id);
            return redirect()->route('admin.division.index')->with('success', 'Division deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

     // Category Master
     public function category_index(){
        $categories = $this->commonRepository->getAllCategory(10);
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Category');
        return view('admin.category.index', array_merge(compact('categories'), $common));
    }

    public function category_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.required' => 'Please enter category name.',
            'name.unique' => 'This category name already exists.',
        ]);
        try {
            $this->commonRepository->createCategory($validatedData);
            return redirect()->back()->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function category_destroy($id){
        try {
            $this->commonRepository->deleteCategory($id);
            return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

        // Ammenity Master
        public function ammenity_index(){
            $ammenities = $this->commonRepository->getAllAmmenity(10);
            $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Ammenity');
            return view('admin.ammenity.index', array_merge(compact('ammenities'), $common));
        }

        public function ammenity_store(Request $request){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:ammenities,name',
            ], [
                'name.required' => 'Please enter ammenity name.',
                'name.unique' => 'This ammenity name already exists.',
            ]);
            try {
                $this->commonRepository->createAmmenity($validatedData);
                return redirect()->back()->with('success', 'Ammenity created successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    
        public function ammenity_destroy($id){
            try {
                $this->commonRepository->deleteAmmenity($id);
                return redirect()->route('admin.ammenity.index')->with('success', 'Ammenity deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    
}
