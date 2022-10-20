@if(\Session::has('success'))
    <div  id="errorsSession" class="absolute z-10 right-0 sm:right-2 flex rounded-md bg-white w-full sm:w-max my-2 shadow-lg dark:shadow-slate-700 shadow-gray-300">
        <div class="flex items-center justify-center bg-green-500 rounded-l-md w-[50px]">
            <div class="bg-white w-[17px] h-[17px] relative rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col">
            <ul class="ml-[12px] mr-[10px] sm:max-w-[400px] max-w-[300px] py-2 px-1">
                <li class="font-light text-[18px] p-0  text-gray-600">{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    </div>
@endif

@if ($errors->any())
<div  id="errorsSession" class="absolute z-10 right-0 sm:right-2 flex rounded-lg bg-white w-full sm:w-max my-2 shadow-lg dark:shadow-slate-700 shadow-gray-300">
    <div class="flex items-center justify-center bg-red-600/80 rounded-l-md min-w-[50px]">
        <div class="bg-white w-[17px] h-[17px] relative rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>
    <div class="flex flex-col">
        <ul class="ml-[12px] mr-[10px] sm:max-w-[400px] max-w-[300px] py-2 px-1">
            @foreach ($errors->all() as $error)
                <li class="font-light text-[17px] p-0 leading-[23px] text-gray-600">{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
