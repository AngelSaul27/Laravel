@props(['type','value'])

@if(($type ?? '') == 'label')
<label {{$attributes->merge(['class' => 'text-sm dark:text-slate-200 text-slate-600 inline-block my-2'])}}>{{$value ?? ''}}</label>
@else
<label {{$attributes->merge(['class' => 'text-sm dark:text-slate-200 text-slate-600 inline-block my-2'])}}>{{$value ?? ''}}{{$slot ?? ''}}</label>
@endif

