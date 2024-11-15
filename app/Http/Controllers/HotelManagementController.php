<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Repositories\HotelRepository;
use App\Repositories\LeadRepository;
use App\Helpers\CustomHelper;
use Illuminate\Validation\Rule;

class HotelManagementController extends Controller
{
    protected $leadRepository;
    protected $commonRepository;
    protected $hotelRepository;

    public function __construct(LeadRepository $leadRepository, CommonRepository $commonRepository, HotelRepository $hotelRepository)
    {
        $this->leadRepository = $leadRepository;
        $this->commonRepository = $commonRepository;
        $this->hotelRepository = $hotelRepository;
    }
    // Hotel Master
    public function index(Request $request){
        // $update_id = $request->update_id ?? "";
        $data = [];

        // Get active destinations using a repository method
        $data['destinations'] = $this->commonRepository->getAllActiveState();
        $data['divisions'] = $this->commonRepository->getAllActiveCity();
        $data['hotel_categories'] = $this->commonRepository->getAllActiveCategory();

        // Fetch paginated hotel data from the hotel repository
        $get_data = $this->hotelRepository->getAllHotel(10);
        $data['hotels']= $get_data['hotel'];  // Paginated data
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Hotels');
        return view('admin.hotel.index', array_merge(compact('data'), $common));
    }

    // Hotel Seasion Plan
    public function hotel_seasion_plan(Request $request){
        $update_id = $request->update_id ?? "";
        $update_item = $this->commonRepository->getHotelSeasionPlanById($update_id);
        $data = $this->commonRepository->getAllHotelSeasionPlan();
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Seasion Plans');
        return view('admin.seasion_plan.index', array_merge(compact('data','update_item'), $common));
    }
    public function hotel_seasion_plan_store(Request $request){
        $validatedData = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('seasion_plans', 'title')->whereNull('deleted_at'),
            ],
            'plan_item' => 'required|array|min:1',
            'plan_item.*' => 'required|string|max:255',
        ], [
            'title.required' => 'The title field is required.',
            'plan_item.required' => 'At least one plan item is required.',
            'plan_item.*.required' => 'This field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->storeHotelSeasionPlan($validatedData);
            return redirect()->back()->with('success', 'Seasion created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function hotel_seasion_plan_update(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('seasion_plans', 'title')->ignore($request->id)->whereNull('deleted_at'),
            ],
            'plan_item' => 'required|array|min:1',
            'plan_item.*' => 'required|string|max:255',
        ], [
            'title.required' => 'The title field is required.',
            'plan_item.required' => 'At least one plan item is required.',
            'plan_item.*.required' => 'This field is required.',
        ]);
          // After validation, proceed to save the data
        try {
            $this->commonRepository->updateHotelSeasionPlan($request->all());
            return redirect()->back()->with('success', 'Seasion updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function hotel_seasion_plan_destroy($id){
        try {
            $this->commonRepository->deleteSeasionPlan($id);
            return redirect()->route('admin.hotel_seasion_plan')->with('success', 'Seasion plan deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
