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
        $common = CustomHelper::setHeadersAndTitle('Master Management', 'States(Destinations)');
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
            'name.required' => 'Please enter state name.',
            'name.unique' => 'This state name already exists.',
        ]);
        try {
            $this->commonRepository->createState($validatedData);
            return redirect()->back()->with('success', 'State created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function state_destroy($id){
        try {
            $this->commonRepository->deleteState($id);
            return redirect()->route('admin.state.index')->with('success', 'State deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // Division Master
    public function division_index(){
        $divisions = $this->commonRepository->getAllCity(10);
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Division(City)');
        return view('admin.division.index', array_merge(compact('divisions'), $common));
    }

    public function division_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:divisions,name',
        ], [
            'name.required' => 'Please enter division name.',
            'name.unique' => 'This division name already exists.',
        ]);
        try {
            $this->commonRepository->createState($validatedData);
            return redirect()->back()->with('success', 'State created successfully.');
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


}
