<button type="button" onclick="Livewire.emit('delete', {{$itemId}})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
    <i class="ti ti-trash"></i>
</button>
@if(session()->has('message'))
<div class="alert alert-success bg-green-500 text-white p-4 rounded-md mb-4">
    {{ session('message') }}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger bg-red-500 text-white p-4 rounded-md mb-4">
    {{ session('error') }}
</div>
@endif