@props(['type','divider','styles'])

@if(($type ?? '') == "divider")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[35] w-auto bg-white divide-y divide-slate-200 dark:divide-slate-600 rounded shadow dark:bg-slate-700'])}}>
    <ul class="py-1 text-sm text-gray-600 dark:text-gray-200">
        {{ $slot ?? ''}}
    </ul>
    {{$divider ?? ''}}
</div>
@endif

@if(($type ?? '') == "default")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[20] w-auto bg-white rounded shadow dark:bg-slate-700 block'])}} style="{{$styles ?? ''}}">
    <ul class="py-1 text-sm text-gray-600 dark:text-gray-200">
        {{ $slot ?? ''}}
    </ul>
</div>
@endif

@if(($type ?? '') == "divider-top")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[35] w-auto bg-white divide-y divide-slate-200 dark:divide-slate-600 rounded shadow dark:bg-slate-700'])}}>
    {{$divider ?? ''}}
    <ul class="py-1 text-sm text-gray-600 dark:text-gray-200">
        {{ $slot ?? ''}}
    </ul>
</div>
@endif

@if(($type ?? '') == "slot")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[35] w-auto bg-white divide-y divide-slate-200 dark:divide-slate-600 rounded shadow dark:bg-slate-700'])}}>
    {{ $slot ?? ''}}
</div>
@endif

@if(($type ?? '') == "fill-none")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[20] w-auto rounded shadow  block'])}} style="{{$styles ?? ''}}">
    <div class="py-1 text-sm text-gray-600 dark:text-gray-200">
        {{ $slot ?? ''}}
    </div>
</div>
@endif

@if(($type ?? '') == "fill-none-ul")
<div {{ $attributes->merge(['class' => 'dropdowns hidden z-[20] w-auto rounded shadow  block'])}} style="{{$styles ?? ''}}">
    <ul class="py-1 text-sm text-gray-600 dark:text-gray-200">
        {{ $slot ?? ''}}
    </ul>
</div>
@endif
