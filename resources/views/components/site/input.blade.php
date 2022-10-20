@props(['model'])
@if(($model)== 'default')
<input {{$attributes->merge(['class'=> 'font-light text-slate-600 border-slate-300 dark:border-none dark:bg-slate-600 dark:text-slate-200 rounded'])}}>
@endif
@if(($model)== 'area')
<textarea {{$attributes->merge(['class' => 'font-light text-slate-600 border-slate-300 dark:border-none dark:bg-slate-600 dark:text-slate-200 rounded'])}}>{{$value ?? ''}}{{$slot ?? ''}}</textarea>
@endif
@if(($model)== 'check')
<input type="checkbox" {{$attributes->merge(['class' => 'font-light text-slate-600 border-slate-300 dark:border-none dark:bg-slate-600 rounded'])}}>
@endif
@if(($model) == 'select')
<select {{$attributes->merge(['class' => 'font-light text-slate-600 border-slate-300 dark:border-none dark:bg-slate-600 rounded'])}}>
    {{$slot ?? ''}}
</select>
@endif
