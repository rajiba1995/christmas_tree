@extends('layouts.master')

@section('styles')

@endsection
@section('title', $common['pageTitle']) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{$common['childHeader']}}</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> {{$common['parentHeader']}} <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">{{$common['childHeader']}}
                    </a> </li>
            </ol>
        </nav>
    </div>

    <div class="ti-btn-list">
        <a href="{{route('admin.leads.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
    </div>
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                <!-- resources/views/create-lead.blade.php -->
                <div class="container mx-auto px-4">
                    <form action="{{ route('admin.leads.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                            <div>
                                <label for="unique_id" class="block text-sm font-medium text-gray-700">Unique ID</label>
                                <x-input-field 
                                type="text" 
                                name="unique_id" 
                                placeholder="Unique ID" 
                                aria-label="Unique ID" 
                                class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('unique_id') ? '!border-danger focus:border-danger focus:ring-danger' : '' }} w-full" 
                                value="{{ $UniqueId }}" 
                                size="lg" 
                                readonly />
                                @error('unique_id')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="customer_name" class="block text-sm font-medium text-gray-700">Customer Name</label>
                                <x-input-field type="text" name="customer_name" placeholder="Customer Name" ariaLabel="Customer Name" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('customer_name') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('customer_name')}}"/>
                                @error('customer_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="customer_email" class="block text-sm font-medium text-gray-700">Customer Email</label>
                                <x-input-field type="email" name="customer_email" placeholder="Customer Email" ariaLabel="Customer Email" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('customer_email') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('customer_email')}}"/>
                                @error('customer_email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="customer_mobile" class="block text-sm font-medium text-gray-700">Customer Mobile</label>
                                <x-input-field type="number" name="customer_mobile" placeholder="Customer Mobile" ariaLabel="Customer Mobile" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('customer_mobile') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('customer_mobile')}}"/>
                                @error('customer_mobile')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="customer_whatsapp" class="block text-sm font-medium text-gray-700">Customer WhatsApp</label>
                                <x-input-field type="text" name="customer_whatsapp" placeholder="Customer WhatsApp" ariaLabel="Customer WhatsApp" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('customer_whatsapp') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('customer_whatsapp')}}"/>
                                @error('customer_whatsapp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="travel_location" class="block text-sm font-medium text-gray-700">Travel Location</label>
                                <x-select-field 
                                    name="travel_location" 
                                    class="form-control {{ $errors->has('travel_location') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" 
                                    ariaLabel="Travel Location" 
                                    selectedText="Select travel location"
                                    :options="$cities->pluck('name', 'id')->toArray()"
                                    :selected="old('travel_location') ?? ''"
                                />

                                @error('travel_location')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="travel_duration" class="block text-sm font-medium text-gray-700">Travel Duration</label>
                                <x-select-field 
                                    name="travel_duration" 
                                    class="form-control {{ $errors->has('travel_duration') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" 
                                    ariaLabel="Travel Duration" 
                                    selectedText="Select travel duration"
                                    :options="[
                                        2 => '3D/2N',
                                        3 => '4D/3N',
                                        4 => '5D/4N',
                                        5 => '6D/5N',
                                        6 => '7D/6N',
                                        7 => '8D/7N',
                                        8 => '9D/8N',
                                        9 => '10D/9N',
                                        10 => '11D/10N',
                                        11 => '12D/11N',
                                        12 => '13D/12N',
                                    ]"
                                    :selected="old('travel_duration') ?? ''"
                                />
                                @error('travel_duration')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="travel_date" class="block text-sm font-medium text-gray-700">Travel Date</label>
                                <x-input-field type="date" name="travel_date" ariaLabel="Travel Date" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('travel_date') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('travel_date')}}" min="{{ date('Y-m-d') }}"/>
                                @error('travel_date')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="number_of_adults" class="block text-sm font-medium text-gray-700">Number of Adults</label>
                                <x-input-field type="number" name="number_of_adults" placeholder="Number of Adults" ariaLabel="Number of Adults" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('number_of_adults') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('number_of_adults', 0)}}"/>
                                @error('number_of_adults')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="number_of_children" class="block text-sm font-medium text-gray-700">Number of Children</label>
                                <x-input-field type="number" name="number_of_children" placeholder="Number of Children" ariaLabel="Number of Children" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('number_of_children') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="{{old('number_of_children', 0)}}"/>
                                @error('number_of_children')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div>
                                <label for="lead_type" class="block text-sm font-medium text-gray-700">Lead Type</label>
                                <x-input-field type="text" name="lead_type" placeholder="Lead Type" ariaLabel="Lead Type" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('lead_type') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" size="lg" value="B2B" readonly/>
                            </div>
                
                            <div>
                                <label for="lead_source" class="block text-sm font-medium text-gray-700">Lead Source</label>
                                <x-input-field type="text" name="lead_source" placeholder="Lead Source" ariaLabel="Lead Source" class="mb-3 placeholder:text-textmuted text-sm {{ $errors->has('lead_source') ? '!border-danger focus:border-danger focus:ring-danger' : '' }}" value="Agent" readonly/>
                            </div>
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">Created By</label>
                                <x-input-field type="text" name="" placeholder="Lead Source" ariaLabel="Lead Source" class="mb-3 placeholder:text-textmuted text-sm" value="{{auth()->user()->name}}" readonly/>
                            </div>
                
                        </div>
                
                        <x-input-field type="hidden" name="user_id" value="{{auth()->user()->id}}" />
                        <x-input-field type="hidden" name="lead_type" value="B2B" />
                        <x-input-field type="hidden" name="lead_source" value="Agent" />
                        <div class="flex justify-end">
                            <x-form-submit-button text="Submit" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                        </div>
                    </form>
                </div>
                

            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')

@endsection
