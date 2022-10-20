@props(['fill','value'])
@if(($fill ?? '') == 'none')
<button {{$attributes->merge(['class' => 'w-full text-white rounded p-2 px-3 my-2'])}}>{{$value ?? ''}}</button>
@else
<button {{$attributes->merge(['class' => 'w-full bg-neutral-900 text-white rounded p-2 px-3 my-2'])}}>{{$value ?? ''}}</button>
@endif