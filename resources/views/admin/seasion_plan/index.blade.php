@extends('layouts.master')
@section('styles')
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
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-8 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                
                <div class="table-responsive">
                    <x-global-table 
                        :items="$data" 
                        :fields="['title', 'Plan_items', 'status']" 
                        dataType="hotel_seasion_plan" 
                        :extra="[]"
                    />
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header">
                <h6 class="uppercase">New {{$childHeader}}</h6>
            </div>
            <div class="box-body">
                <form action="{{route('admin.hotel_seasion_plan_store')}}" method="post" id="create_plan">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <x-form-field 
                            type="text" 
                            name="title" 
                            label="title" 
                            :options="[]"
                            :value="old('title')"
                            />
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                     <!-- Dynamic plan_item fields container -->
                     <div id="plan-items-container">
                        @if(old('plan_item'))
                                @php
                                    $planItems = old('plan_item', ['']); // Default to one empty item if no old values
                                @endphp
                            
                            @foreach($planItems as $index => $item)
                                <div class="grid grid-cols-12 gap-4 mt-3">
                                    <div class="col-span-10">
                                        <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item" value="{{$item}}">
                                        @error("plan_item.$index")
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @if($index==0)
                                        <div class="col-span-2 flex items-end">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                        </div>
                                    @else
                                        <div class="col-span-2 flex items-end">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 grid grid-cols-12 gap-4">
                                <!-- First plan_item input and Add More button -->
                                <div class="col-span-10">
                                    <x-form-field 
                                        type="text" 
                                        name="plan_item[]" 
                                        label="Plan Item" 
                                        :options="[]" 
                                        :value="old('plan_item.0')" 
                                    />
                                    @error('plan_item.*')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 flex items-end">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex justify-end">
                        <x-form-submit-button text="Submit" class="ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('plan-items-container');

        // Add More button function
        document.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('add-more-btn')) {
                const newField = document.createElement('div');
                newField.classList.add('grid', 'grid-cols-12', 'gap-4', 'mt-3');
                newField.innerHTML = `
                    <div class="col-span-10">
                       <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item">
                    </div>
                    <div class="col-span-2 flex items-end">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                    </div>
                `;
                container.appendChild(newField);
            }
        });

        // Remove button function
        container.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('remove-btn')) {
                event.target.closest('.grid').remove();
            }
        });
    });
</script>
<!-- Custom Scripts -->
<script>
    document.addEventListener('livewire:load', function () {
        // Listen for the custom 'removeRow' event emitted by Livewire
        Livewire.on('removeRow', (itemId) => {
            // Remove the row with the corresponding item ID from the table
            const row = document.getElementById('delete' + itemId);
            if (row) {
                row.remove(); // Removes the table row
            }
        });
    });
</script>
@endsection

