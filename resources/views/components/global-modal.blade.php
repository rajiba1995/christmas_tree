
<div id="{{$type}}-{{ $id }}" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
            <form action="{{$formAction}}" method="{{$formMethod}}">
                @csrf
                <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                    <h6 class="modal-title text-[1rem] font-semibold">{{ $title }}</h6>
                </div>
                @if($type=='leads')
                    <div class="p-4 overflow-y-auto">
                        <x-form-field 
                        type="select" 
                        name="lead_status" 
                        label="Lead Status" 
                        :options="$statuses->pluck('name', 'id')->toArray()"
                        :value="$selectedStatus"
                         />
                    </div>
                @endif
                
                <x-input-field type="hidden" name="id" value="{{$id}}" />
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                    <x-form-submit-button text="Save Changes" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                </div>
            </form>
        </div>
    </div>
</div>
