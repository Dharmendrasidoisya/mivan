@php
    $autoplay = $autoplay ?? false;
@endphp
@foreach ($fields as $field)
    @php
        $name = $field['name'];
        $type = $field['type'] ?? 'text';
        $label = $field['label'];
        $placeholder = $field['placeholder'] ?? $label;
        $value = Arr::get($attributes, $name, $field['default'] ?? null);
    @endphp
    <div class="mb-3">
        <label class="form-label">{{ $label }}</label>
        @switch($type)
            @case('textarea')
                <textarea name="{{ $name }}" class="form-control" @isset($field['rows']) rows="{{ $field['rows'] }}" @endisset placeholder="{{ $placeholder }}">{{ $value }}</textarea>
            @break

            @case('image')
                {!! Form::mediaImage($name, $value) !!}
            @break

            @case('select')
                {!! Form::customSelect($name, $field['options'], $value) !!}
            @break

            @default
                <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" class="form-control" placeholder="{{ $placeholder }}">
        @endswitch
    </div>
@endforeach

@if ($autoplay)
    {!! Theme::partial('shortcodes.includes.autoplay-settings', compact('attributes')) !!}
@endif
