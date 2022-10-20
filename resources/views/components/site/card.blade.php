@props(['claseHeader','title','claseBody','claseFooter'])
<div {{$attributes->merge(['class' => 'text-slate-600 rounded-md mb-3 border dark:border-none dark:text-white dark:shadow'])}}>
    <!-- header -->
    <div class='p-1.5 rounded-t-md text-center text-[20px] border-b dark:bg-slate-600 dark:border-none font-semibold tracking-wider {{$claseHeader ?? ''}}'>
       <span>{{$title ?? ''}}</span>
    </div>
    <!-- body -->
    <div class='flex flex-col w-full p-3 text-[14px] dark:bg-slate-500 text-gray-400 {{$claseBody ?? ''}}'>
       {{$slot ?? ''}}
    </div>
    <!-- footer -->
    <div class='flex justify-end p-1 px-3 rounded-b-md border-t dark:bg-slate-600 dark:border-none {{$claseFooter ?? ''}}'>
       {{$footer ?? ''}}
    </div>
</div>
