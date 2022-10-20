@if($counts['Completed'] != 0)
<!-- items -->
@foreach($task['Completed'] as $item)
    <div class="w-full pt-3 rounded-md rounded-b-lg cursor-pointer transition-all duration-300 hover:-translate-y-1 bg-slate-500 drop-shadow-md" style="background-color: {{$item->color_head}}">
        <div class="p-2.5 w-full rounded-b-md relative bg-white dark:bg-slate-600">
            <p class="text-[16px] sm:text-[18px] dark:text-slate-200 mb-1">{{Str::limit($item->name, 50, '...')}}</p>
            <svg baseProfile="full" width="55" height="5" xmlns="http://www.w3.org/2000/svg">
                <rect rx="2" ry="2" width="50px" height="5px" fill="{{$item->color_priority}}"></rect>
            </svg>
            <p class="text-[15.5px] leading-[1.1] my-2 mb-[2px] dark:text-slate-200 break-words">
                {{Str::limit($item->description, 150, '..')}}
            </p>
            <p class="text-[13.5px] tracking-wider mt-0 dark:text-slate-300">
                <span>Finish before</span>
                <span class="font-[400] dark:text-orange-300/70">{{$item->due_date}}</span>
            </p>
            <div class="absolute flex right-1 top-[7px] z-10">
                <x-site.url class="p-1 text-blue-500 dark:text-blue-300 rounded-full dark:hover:bg-slate-500/50 hover:bg-slate-100 hover:shadow" model="default" href="{{url('/app/task/show/'.$item->id)}}" target="_blank">
                    <x-site.svg path="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" model="none"/>
                </x-site.url>
                <x-site.url class="p-1 text-green-500 dark:text-green-300 rounded-full dark:hover:bg-slate-500/50 hover:bg-slate-100 hover:shadow" model="default" onclick="editTask({{$item->id}});">
                    <x-site.svg path="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" model="none"/>
                </x-site.url>
                <x-site.url class="p-1  text-red-500 dark:text-red-300 rounded-full dark:hover:bg-slate-500/50 hover:bg-slate-100 hover:shadow cursor-pointer" model="default" onclick="deleteTask({{$item->id}});">
                    <x-site.svg path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" model="none"/>
                </x-site.url>
            </div>
        </div>
    </div>
@endforeach
<!-- end items -->
@else
    <div class="w-full flex flex-col justify center items-center">
    <p class="text-gray-400 text-[14px] p-3"> It looks like you don't have any activity yet </p>
    <img src="{{asset('img/ilustraciones/playing.png')}}" width="150px" height="150px" alt="Playing">
</div>
@endif
