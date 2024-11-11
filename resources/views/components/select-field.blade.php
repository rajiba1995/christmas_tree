<select name="{{ $name }}" class="{{ $class }}" aria-label="{{ $ariaLabel }}">
    <option value="" disabled {{ $selected ? '' : 'selected' }}>{{ $selectedText }}</option>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" {{ ($selected == $value) ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
