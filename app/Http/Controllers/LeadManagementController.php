<?php

namespace App\Http\Controllers;

use App\Repositories\LeadRepository;
use App\Repositories\CommonRepository;
use Illuminate\Http\Request;
use App\Helpers\CustomHelper;

class LeadManagementController extends Controller
{
    protected $leadRepository;
    protected $commonRepository;

    public function __construct(LeadRepository $leadRepository, CommonRepository $commonRepository)
    {
        $this->leadRepository = $leadRepository;
        $this->commonRepository = $commonRepository;
    }

    public function index(Request $request)
    {
        $filter = (object) [
            'city' => $request->city ?? "",
            'package' => $request->package ?? "",
            'lead_type' => $request->lead_type ?? "",
            'lead_status' => $request->lead_status ?? "",
            'search' => $request->search ?? "",
            'start_date' => $request->start_date ?? "",
            'end_date' => $request->end_date ?? "",
        ];

        $leads = $this->leadRepository->getAllLeads(10);
        $leads_status = $this->commonRepository->getALlActiveLeadSatus();
        $cities = $this->commonRepository->getAllActiveCity();
        $common = CustomHelper::setHeadersAndTitle('Lead Management', 'Leads');
        return view('admin.leads.index', array_merge(compact('leads','leads_status','cities','filter'), $common));
    }

    // Additional methods for create, store, show, edit, update, and delete
    public function create(){

        $cities = $this->commonRepository->getAllActiveCity();
        $common = CustomHelper::setHeadersAndTitle('Lead Management', 'Create Lead');

        $UniqueId = CustomHelper::GenerateUniqueId('leads', 'LTD');
        return view('admin.leads.create', compact('common', 'UniqueId', 'cities'));
    }
    public function store(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'unique_id' => 'required|string|unique:leads,unique_id|max:255',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_mobile' => 'required|digits:10', // Use 'digits' for exact length
            'customer_whatsapp' => 'required|digits:10', // Use 'digits' for exact length
            'travel_location' => 'required|string|max:255',
            'travel_duration' => 'required|string|max:255',
            'travel_date' => 'required|date', // Use 'date' validation if this is a date field
            'number_of_adults' => 'required|integer|min:0|max:15', // Use 'integer' and set 'min' and 'max' for range
            'number_of_children' => 'required|integer|min:0|max:15', // Use 'integer' and set 'min' and 'max' for range
        ], [
            'travel_duration.required' => 'Please select a travel duration.',
            'customer_name.required' => 'Customer name is required.',
            'customer_mobile.digits' => 'Customer mobile must be exactly 10 digits.',
            'customer_whatsapp.digits' => 'Customer WhatsApp number must be exactly 10 digits.',
            'travel_date.date' => 'The travel date must be a valid date.',
            'number_of_adults.integer' => 'The number of adults must be an integer.',
            'number_of_children.integer' => 'The number of children must be an integer.',
            // Add additional custom messages as needed
        ]);
        try {
            $validatedData['user_id'] = $request->user_id;
            $validatedData['lead_type'] = $request->lead_type;
            $validatedData['lead_source'] = $request->lead_source;

            $this->leadRepository->createLead($validatedData);
            return redirect()->back()->with('success', 'Lead created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function update_status(Request $request){
        $data = $request->except('_token');
        try {
            $this->leadRepository->updateLeadStatus($data);
            return redirect()->back()->with('success', 'Lead status updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

