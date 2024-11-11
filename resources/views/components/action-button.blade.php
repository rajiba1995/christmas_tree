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

<a href="{{ $url }}" class="{{ $styles[$type] }}">
    <i class="{{ $icons[$type] }}"></i>
</a>
