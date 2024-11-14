<table class="table whitespace-nowrap min-w-full">
    <thead>
        <tr>
            <th>SL</th>
            @foreach ($fields as $field)
                <th scope="col" class="text-start">{{ strtoupper(str_replace('_', ' ', $field)) }}</th>
            @endforeach
            <th scope="col" class="text-start">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $index => $item)
            <tr class="text-grey" id="delete{{$item->id}}">
                <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                @if ($dataType === 'leads')
                    <td>
                        <p class="badge bg-primary text-white">{{$item->unique_id }}</p>
                        <p class="mt-1"> {{ $item->customer_name }}
                                <span class="badge gap-2 bg-success/10 text-success">
                                    <span class="w-1.5 h-1.5 inline-block bg-success rounded-full"></span>Online
                                </span>
                        </p>
                        @php
                            $createdAt = \Carbon\Carbon::parse($item->created_at);
                            $diffInMinutes = $createdAt->diffInMinutes();
                            $hours = floor($diffInMinutes / 60);
                            $minutes = $diffInMinutes % 60;
                        @endphp
                        <button type="button" class="badge bg-outline-secondary my-3 me-2">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y h.i A') }}
                            <span class="badge bg-secondary ms-2 text-white"> {{ $hours > 0 ? $hours . ' hr' : '' }} {{ $minutes > 0 ? $minutes . ' min' : '' }} ago</span>
                        </button>
                    </td>
                    <td>
                        {{ $item->lead_source }} 
                        <span class="badge bg-primary text-white">{{ $item->lead_type }} </span>
                    </td>
                    <td>
                        <div>
                            <i class="fa-regular fa-envelope text-danger"></i>
                            {{ $item->customer_email }}
                        </div>
                        <div>
                            <i class="fa-solid fa-phone text-success"></i>
                            +{{ $item->country_code }}{{ $item->customer_mobile }}
                        </div>
                        <div>
                            <i class="fa-brands fa-whatsapp text-success"></i>
                            +{{ $item->country_code }}{{ $item->customer_whatsapp }}
                        </div>
                    </td>
                    <td>
                        <div>
                            @if($item->package)
                            <span class="badge bg-outline-primary">{{ $item->package }}</span>
                            @endif
                        </div>
                        <div>
                            <i class="ri-map-pin-line"></i>
                            {{ $item->city?$item->city->name:"..." }}
                        </div>
                        <div>
                            <i class="fa-regular fa-clock text-danger"></i>
                            Start Date: {{ \Carbon\Carbon::parse($item->travel_date)->format('d M Y') }}
                        </div>
                        <div>
                            <i class="fa-regular fa-clock text-danger"></i>
                            Trip Duration: {{ $item->travel_duration }}
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="hs-dropdown-toggle badge {{ \App\Helpers\CustomHelper::getLeadStatus($item->status)['color'] }} text-white" data-hs-overlay="#leads-{{ $item->id }}">
                            {{ \App\Helpers\CustomHelper::getLeadStatus($item->status)['name'] }}
                        </a>
                    </td>
                    <td>
                        <a class="ti-btn ti-btn-outline-primary ti-btn-wave !py-1 !px-2 me-[0.375rem]" >View</a>
                        <button class="ti-btn ti-btn-outline-primary ti-btn-wave !py-1 !px-2 me-[0.375rem]" title="Edit Lead"><i class="fa-regular fa-pen-to-square"></i>Edit</button>

                    </td>
                    <x-global-modal
                        id="{{ $item->id }}"
                        type="leads"
                        title="Update Lead Status for {{ $item->unique_id }}"
                        content="Your content here"
                        :statuses="$extra['status']"
                        formAction="{{ route('admin.leads.update_status', $item->id) }}"
                        formMethod="POST"
                        formButton="submit"
                        selectedStatus="{{$item->status}}"
                    />
                @elseif($dataType=='states')
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="State" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20" onclick="ShowModal(event,{{$item->id}})">
                                <i class="ti ti-pencil"></i>
                            </a>
                           <!-- Delete button that triggers confirmation -->
                           <button type="button" onclick="confirmDelete(event,{{$item->id}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </td>

                @elseif($dataType=='division')
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">{{$item->DestinationData?$item->DestinationData->name:""}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="City" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20" onclick="ShowModal(event,{{$item->id}})">
                                <i class="ti ti-pencil"></i>
                            </a>
                           <!-- Delete button that triggers confirmation -->
                           <button type="button" onclick="confirmDelete(event,{{$item->id}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </td>
                
                @elseif($dataType=='categories')
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="Category" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20" onclick="ShowModal(event,{{$item->id}})">
                                <i class="ti ti-pencil"></i>
                            </a>
                            <!-- Delete button that triggers confirmation -->
                            <button type="button" onclick="confirmDelete(event,{{$item->id}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </td>
                @elseif($dataType=='amenities')
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="Category" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20" onclick="ShowModal(event,{{$item->id}})">
                                <i class="ti ti-pencil"></i>
                            </a>
                            <!-- Delete button that triggers confirmation -->
                            <button type="button" onclick="confirmDelete(event,{{$item->id}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </td>
                @elseif($dataType=='hotel_seasion_plan')
                    <td scope="row" class="!p-1">{{$item->title}}</td>
                    <td scope="row" class="!p-1">
                        @php
                        $planItemsArray = explode(', ', $item->plan_item);
                        @endphp
                        @if(count($planItemsArray)>0)
                            @foreach ($planItemsArray as $plan_item)
                                <span class="badge gap-2 bg-primary/10 text-primary">
                                    <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                                    {{$plan_item}}
                                </span>
                            @endforeach
                        @endif
                    </td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="SeasionPlan" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.hotel_seasion_plan',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.hotel_seasion_plan_destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                @else
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
