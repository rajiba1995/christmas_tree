<div class="form-group mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">{{ $label }}</label>
    @endif

    @if($type === 'text' || $type === 'email' || $type === 'password' || $type === 'number')
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
               {{ $attributes->merge(['class' => 'form-control form-control-sm']) }} placeholder="Enter {{$label}}">
    
    @elseif($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}"
                  {{ $attributes->merge(['class' => 'form-textarea w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500']) }}>
            {{ old($name, $value) }}
        </textarea>

    @elseif($type === 'select')
        <select name="{{ $name }}" id="{{ $name }}"
                {{ $attributes->merge(['class' => 'form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500']) }}>
                <option value="" selected>Select {{strtolower($label)}}..</option>
            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" {{ $optionValue == old($name, $value) ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>

    @elseif($type === 'checkbox' || $type === 'radio')
        <div class="space-y-2">
            @foreach($options as $optionValue => $optionLabel)
                <label class="inline-flex items-center">
                    <input type="{{ $type }}" name="{{ $name }}[]" value="{{ $optionValue }}"
                           {{ in_array($optionValue, (array) old($name, $value)) ? 'checked' : '' }}
                           class="form-{{ $type }} h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                    <span class="ml-2 text-gray-700">{{ $optionLabel }}</span>
                </label>
            @endforeach
        </div>
    @endif
</div>
