@props(['model', 'value'])

@if(($model ?? '') == 'default')
<a {{$attributes->merge(['class' => 'flex transition-all duration-300'])}}>
    {{$slot ?? ''}}
    {{$value ?? ''}}
</a>
@endif

@if(($model ?? '') == 'icon-left')
<a {{$attributes->merge(['class' => 'flex transition-all duration-300'])}}>
    {{$slot ?? ''}}
    <span>{{$value ?? ''}}</span>
</a>
@endif

@if(($model ?? '') == 'icon-right')
<a {{$attributes->merge(['class' => 'flex transition-all duration-300'])}}>
    <span>{{$value ?? ''}}</span>
    {{$slot ?? ''}}
</a>
@endif

@if(($model ?? '') == 'icon-x')
<a {{$attributes->merge(['class' => 'flex transition-all duration-300'])}}>
    {{$slot ?? ''}}
    <span>{{$value ?? ''}}</span>
    {{$slot2 ?? ''}}
</a>
@endif

@if(($model ?? '') == 'before')
<a {{$attributes->merge(['class' => 'flex items-center transition-all duration-300 relative before:absolute before:transition-all before:w-full before:origin-left hover:origin-right before:left-0'])}}>
    {{ $slot ?? ''}}
    {{ $value ?? '' }}
</a>
@endif
