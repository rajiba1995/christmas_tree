<table class="table whitespace-nowrap min-w-full" id="draggable-table">
    <thead>
        <tr>
            <th>SL</th>
            <th scope="col" class="text-start">TITLE</th>
            <th scope="col" class="text-start">PLAN ITEMS</th>
            <th scope="col" class="text-start">STATUS</th>
            <th scope="col" class="text-start">ACTIONS</th>
        </tr>
    </thead>
    <tbody id="sortable-body">
        {{-- {{dd($seasionPlans)}} --}}
        @foreach ($seasionPlans as $index => $item)
        <tr data-id="{{ $item->id }}" id="delete{{ $item->id }}">
            <td scope="row" class="text-start !p-1" wire:sortable.handle>{{ $index + 1 }}</td>
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
                <livewire:master-status-toggle modelName="SeasionPlan" :item="$item"
                    wire:key="status-toggle-{{ $item->id }}" />
            </td>
            <td scope="row" class="!p-1" width="10%">
                <div>
                    <x-action-button type="edit" url="{{ route('admin.hotel_seasion_plan',['update_id'=>$item->id]) }}"
                        itemId="{{ $item->id }}" />
                    <x-action-button type="delete" url="{{ route('admin.hotel_seasion_plan_destroy', $item->id) }}"
                        itemId="{{ $item->id }}" />
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>