@extends('layouts.master')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('build/assets/libs/dragula/dragula.min.css') }}">
@endsection
@section('title', $pageTitle) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-1  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0 uppercase">{{$childHeader}}</h5>
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
        <a href="{{route('admin.leads.create')}}" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add New Hotel</a>
    </div>
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                <form>
                    <table class="table whitespace-nowrap min-w-full">
                        <tbody>
                            <tr>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="destination" 
                                        label="Destination" 
                                        :options="$data['destinations']->pluck('name', 'id')->toArray()"
                                        :value="old('destination')"
                                        class="js-example-basic-single"
                                        />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="division" 
                                        label="Division" 
                                        :options="$data['divisions']->pluck('name', 'id')->toArray()"
                                        :value="old('division')"
                                        class="js-example-basic-single"
                                        />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="hotel_categories" 
                                        label="Category" 
                                        :options="$data['hotel_categories']->pluck('name', 'id')->toArray()"
                                        :value="old('hotel_categories')"
                                        class="js-example-basic-single"
                                        />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-input-field type="text" name="quick_search" id="quick_search" placeholder="Quick search" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" value=""/>
                                </td>
                                <td width="10%">
                                    <x-form-submit-button text="Search" class="change-text-button ti-btn ripple ti-btn-primary-full !mb-0" />
                                    <a href="{{route('admin.hotel.index')}}" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                                        <i class="mdi mdi-refresh"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div class="table-responsive">
                    <x-global-table 
                        :items="$data['hotels']" 
                        :fields="['Hotel Details','Room Details', 'status']" 
                        dataType="hotel" 
                        :extra="[]"
                    />
                    {{ $data['hotels']->links() }}
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
@vite('resources/assets/js/select2.js')
@endsection

