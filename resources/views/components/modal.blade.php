@props(['id'])
<div class="fixed md:px-0 px-4 py-10 hidden items-center justify-center inset-0 z-40 bg-black/50" id="{{$id ?? ''}}">
    <div id="{{$id ?? ''}}-target" class="hidden relative max-w-[860px] w-max h-max bg-slate-100 dark:bg-slate-700 p-3 rounded-md overflow-hidden text-slate-600 dark:text-slate-300">

    </div>
</div>
