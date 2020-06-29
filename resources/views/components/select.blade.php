@props([
    'name',
    'options' => [],
])
<div x-data
     x-init="
                $($refs.select)
                .select2({ placeholder: ''})
                .on('change', function(e) {
                    @this.set('{{ $name }}', e.target.value);
                });
                "
>

    <div wire:ignore>
        <select x-ref="select"
                {{ $attributes }}
        >
            @foreach($options as $value => $option)
                <option value="{{ $value }}">
                    {{ $option }}
                </option>
            @endforeach
        </select>
    </div>


</div>
