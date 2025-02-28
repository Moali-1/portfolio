@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['style' => 'color: red;']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
