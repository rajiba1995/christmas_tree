<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommonRepository;
use App\Repositories\LeadRepository;
use App\Helpers\CustomHelper;
use Illuminate\Validation\Rule;

class HotelManagementController extends Controller
{
    protected $leadRepository;
    protected $commonRepository;

    public function __construct(LeadRepository $leadRepository, CommonRepository $commonRepository)
    {
        $this->leadRepository = $leadRepository;
        $this->commonRepository = $commonRepository;
    }
    public function hotel_seasion_plan(Request $request){
        $data = $this->commonRepository->getAllHotelSeasionPlan(10);
        $common = CustomHelper::setHeadersAndTitle('Hotel Management', 'Seasion Plans');
        return view('admin.seasion_plan.index', array_merge(compact('data'), $common));
    }
    public function hotel_seasion_plan_store(Request $request){
        // dd($request->all());
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
}
