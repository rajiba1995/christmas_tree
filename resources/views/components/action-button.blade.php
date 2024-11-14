@props(['type' => 'view', 'url' => '#', 'itemId' => null])

@php
    $styles = [
        'view' => 'ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20',
        'edit' => 'ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20',
        'delete' => 'ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20',
    ];

    $icons = [
        'view' => 'ti ti-eye',
        'edit' => 'ti ti-pencil',
        'delete' => 'ti ti-trash',
    ];
@endphp

@if($type=='delete')
<a href="javascript:void(0);" class="{{ $styles[$type] }}" id="action-button-{{ $itemId }}" 
   onclick="return confirmDelete(event, '{{ $url }}')">
    <i class="{{ $icons[$type] }}"></i>
</a>
@else
<a href="{{ $url }}" class="{{ $styles[$type] }}" id="action-button-{{ $itemId }}">
    <i class="{{ $icons[$type] }}"></i>
</a>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(event, url) {
        // Only for delete icon
        if (event.target.classList.contains('ti-trash')) {
            event.preventDefault(); // Prevents the default action

            // SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, redirect to the deletion URL
                    window.location.href = url; // or the `url` variable if passing a specific URL
                } else {
                    // If cancelled, show a message or take no action
                    Swal.fire(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    );
                }
            });
        }
    }
</script>
