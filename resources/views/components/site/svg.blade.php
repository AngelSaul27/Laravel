@props(['model', 'path', 'path2'])

@if(($model ?? '') == 'none')
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
    <path stroke-linecap="round" stroke-linejoin="round" d="{{$path ?? ''}}" />
</svg>
@endif

@if(($model ?? '') == 'fill')
<svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" viewBox="0 0 20 20" fill="currentColor" {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
    <path d="{{$path ?? ''}}" />
</svg>
@endif

@if(($model ?? '') == 'none-2')
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
    <path stroke-linecap="round" stroke-linejoin="round" d="{{$path ?? ''}}" />
    <path stroke-linecap="round" stroke-linejoin="round" d="{{$path2 ?? ''}}" />
</svg>
@endif

@if(($model ?? '') == 'fill-2')
<svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" viewBox="0 0 20 20" fill="currentColor" {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
    <path d="{{$path ?? ''}}" />
    <path d="{{$path2 ?? ''}}" />
</svg>
@endif

@if(($model ?? '') == 'special-slot')
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" {{ $attributes->merge(['class' => 'h-5 w-5']) }}>
    {{$slot ?? ''}}
</svg>
@endif
