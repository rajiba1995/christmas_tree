@extends('layouts.master')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
@endsection
@section('title', $pageTitle) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-1  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{$parentHeader}}</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> {{$parentHeader}} <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">{{$childHeader}}
                    </a> </li>
            </ol>
        </nav>
    </div>

    <div class="ti-btn-list">
        <a href="{{route('admin.leads.create')}}" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add Lead</a>
    </div>
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="p-0">
                <form>
                    <table class="table whitespace-nowrap min-w-full">
                        <tbody>
                            <tr>
                                <td class="py-0 mt-0">
                                    <label for="select-1" class="ti-form-select rounded-sm !py-2 !px-3-label text-textmuted">LOCATION</label>
                                    <select class="js-example-basic-single w-full py-2 px-3 rounded border border-gray-300" name="city">
                                        <option value="" selected>Select a city..</option>
                                        @foreach($cities as $key=>$city)
                                        <option value="{{$city->id}}" {{$filter->city==$city->id?"selected":""}}>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="py-0 mt-0">
                                    <label for="select-1" class="ti-form-select rounded-sm !py-2 !px-3-label text-sm text-textmuted">PACKAGE</label>
                                    <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0" id="select-beast" autocomplete="off" name="package">
                                        <option value="">Select a package...</option>
                                        <option value=""{{$filter->package==$city->id?"selected":""}}>Select a package...</option>
                                    </select>
                                </td>
                                <td class="py-0 mt-0">
                                    <label for="select-1" class="ti-form-select rounded-sm !py-2 !px-3-label text-sm text-textmuted">LEAD TYPE</label>
                                    <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0" id="select-beast" autocomplete="off" name="lead_type">
                                        <option value="">Select a type...</option>
                                        <option value="B2B"{{$filter->lead_type=="B2B"?"selected":""}}>B2B</option>
                                        <option value="B2C"{{$filter->lead_type=="B2C"?"selected":""}}>B2C</option>
                                        </select>
                                </td>
                                <td class="py-0 mt-0" colspan="2">
                                    <label for="select-1" class="ti-form-select rounded-sm !py-2 !px-3-label text-sm text-textmuted">LEAD STATUS</label>
                                    <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0" id="select-beast" autocomplete="off" name="lead_status">
                                        <option value="">Select a status...</option>
                                        @foreach($leads_status as $key =>$status)
                                        <option value="{{$status->id}}" {{$filter->lead_status==$status->id?"selected":""}}>{{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="form-control placeholder:!text-headerprimecolor placeholder:opacity-70 placeholder:font-thin placeholder:text-sm"
                                    placeholder="Search for anything..." type="search" name="search" value="{{$filter->search}}">
                                </td>
                                <td width="13%">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control !border-s-0" id="date" placeholder="START DATE" name="start_date" value="{{$filter->start_date}}">
                                        </div>
                                    </div>
                                </td>
                                <td width="13%">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control !border-s-0" id="date" placeholder="END DATE" name="end_date" value="{{$filter->end_date}}">
                                        </div>
                                    </div>
                                </td>
                                <td width="8%">
                                    <button type="submit" class="ti-btn ti-btn-success-full text-white  ti-btn-icon me-2 !mb-0">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="{{route('admin.leads.index')}}" class="ti-btn ti-btn-danger-full text-white  ti-btn-icon me-2 !mb-0">
                                        <i class="mdi mdi-refresh"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="box custom-box">
            <div class="box-body">
                <div class="table-responsive">
                    <x-global-table 
                        :items="$leads" 
                        :fields="['lead_name', 'lead_source', 'Contact Details', 'package_details', 'status']" 
                        dataType="leads" 
                        :extra="['status' => $leads_status]"
                    />
                    {{ $leads->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
	
        <!-- Jquery Cdn -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- Select2 Cdn -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Internal Select-2.js -->
        @vite('resources/assets/js/select2.js')
        @vite('resources/assets/js/date&time_pickers.js')
@endsection
