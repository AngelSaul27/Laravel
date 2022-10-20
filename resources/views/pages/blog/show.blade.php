@extends('layouts.blog')
@section('title', 'Post | Push Code')
@section('global')
<header class="relative max-h-96 h-96 p-4 px-2 sm:px-5 bg-blue-200 dark:bg-blue-300 bg-no-repeat bg-top sm:bg-auto bg-cover"
    style="background-image: url({{asset('img/ilustraciones/family_reunion.png')}});">

    <x-site.breadcrumb class="text-slate-700/90" clase="hover:text-white" value="Home" location="/blog">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-white" value="Post" />
        <x-site.breadcrumb-item model="disabled" clase="text-slate-500/90" value="Name" />
    </x-site.breadcrumb>

    <div class="absolute bottom-4 left-6 text-gray-600 font-light select-none">
        <h1 class="text-1xl sm:text-2xl font-semibold mb-2 break-all">Title</h1>
        <div class="flex items-center text-gray-700">
           <span class="bg-gray-500 p-1 px-3 text-white shadown rounded-full">P</span>
           <div class="flex flex-col p-1 ml-1 text-[14px]">
              <p class="flex items-center text-[14px]"><a class="text-white font-semibold capitalize" href="">Author</a> <span class="text-[8px] mx-1">|</span> 01-05-2022<span class="text-[8px] mx-1"> | </span><span class="sm:flex hidden">Team PushCode</span> </p>
              <span class="text-[12px]">Last Update <span class="text-white font-semibold text-[14px]">01-07-2022</span> </span>
           </div>
        </div>
    </div>
</header>

<main class="px-3 md:px-5 py-2 md:py-3 text-slate-600 dark:text-slate-300">
    <!-- Content -->
    <div class="w-full md:w-5/6 lg:w-4/6">
        <h1 class="text-[30px] font-semibold">Title</h1>
        <p class="text-justify mb-8 text-slate-500 dark:text-slate-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sit omnis libero tempore excepturi? Magnam, soluta tempore? Cupiditate rerum dignissimos quo eligendi, perspiciatis fuga sit, est dolor incidunt itaque atque?
        </p>

        <!-- Shared -->
        <div class="flex items-center justify-between">
            <div class="flex items-center ">
                <x-site.svg model="none" class="w-3.5 mr-1" path="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                <span class="text-[14px] text-light tracking-wider">Share Post</span>
            </div>
            <div class="flex text-[14px] text-light tracking-wider">
                <x-site.url id="SharedWithFb" model="icon-right" class="cursor-pointer p-2 bg-gray-100 text-gray-700 rounded-md hover:-translate-y-1 shadow ml-2">
                <img src="{{asset('svg/icon/logo-facebook.svg')}}" alt="logo-facebook" width="20px" height="20px">
                <span class="ml-1 hidden sm:flex">Facebook</span>
                </x-site.url>
                <x-site.url id="SharedWithTw" model="icon-right" class="cursor-pointer p-2 bg-gray-100 text-gray-700 rounded-md hover:-translate-y-1 shadow ml-2">
                <img src="{{asset('svg/icon/logo-twitter.svg')}}" alt="logo-twitter" width="20px" height="20px">
                <span class="ml-1 hidden sm:flex">Twitter</span>
                </x-site.url>
                <x-site.url id="SharedWithWhats" model="default" class="cursor-pointer p-2 bg-gray-100 text-gray-700 rounded-md hover:-translate-y-1 shadow ml-2">
                <img src="{{asset('svg/icon/logo-whatsapp.svg')}}" alt="logo-whatsapp" width="20px" height="20px">
                </x-site.url>
                <x-site.url id="SharedWithEmail" model="default" class="cursor-pointer p-2 bg-gray-100 text-gray-700 rounded-md hover:-translate-y-1 shadow ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                </x-site.url>
            </div>
        </div>

        <!-- Previous Page and Next Page-->
        <div class="flex items-center justify-between mt-6">
            <x-site.url model="default" href="#" class="text-light text-[14px] tracking-wider">
               <x-site.svg model="none" class="w-3" path="M15 19l-7-7 7-7" />
               <span>Previous Post</span>
            </x-site.url>
            <x-site.url model="default" href="#" class="text-light text-[14px] tracking-wider">
               <span>Next Post</span>
               <x-site.svg model="none" class="w-3" path="M9 5l7 7-7 7" />
            </x-site.url>
        </div>

        <div class="h-[7px] border-y border-dashed dark:border-gray-400 dark:opacity-10 border-gray-300 my-5"></div>

        <!-- Comments -->
        <div class="flex items-center select-none">
            <x-site.svg model="none" class="w-3" path="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            <span class="text-[18px] font-semibold tracking-wider">Your comment is important</span>
        </div>
        <span class="text-[13px] italic font-light tracking-wide ml-3.5 mt-1 select-none">Your comments improve our posts</span>
        <form action="" class="mt-3">
            <x-site.input model="area" type="text" name="comments" class="w-full rounded-md shadow duration-300 focus:border-gray-400 focus:ring-gray-400 focus:ring-2 outline-none bg-slate-100 border-none dark:bg-slate-600 dark:border" placeholder="Comment" required />
            @if(!auth()->check())
            <div class="w-full flex items-center my-3">
                <x-site.input model="default" type="text" name="name" class="w-full mb-1 mr-1 rounded-md shadow duration-300 focus:border-gray-400 focus:ring-gray-400 focus:ring-2 outline-none bg-slate-100 border-none dark:bg-slate-600 dark:border" placeholder="Name" required />
                <x-site.input model="default" type="text" name="email" class="w-full mb-1 ml-1 rounded-md shadow  duration-300 focus:border-gray-400 focus:ring-gray-400 focus:ring-2 outline-none bg-slate-100 border-none dark:bg-slate-600 dark:border" placeholder="Email" required />
            </div>
            @endif
            <div class="flex">
                <x-site.input model="check" class="rounded-md shadow duration-300 focus:border-gray-400 focus:ring-gray-400  focus:ring-2 outline-none" required />
                <span class="ml-2 text-light text-[14px]">I accept that my comment will be respectful</span>
            </div>
            <x-site.button fill="none" value="Post Comment" class="w-max my-4 bg-green-600 dark:bg-slate-700 shadow hover:-translate-y-1 transition:all duration-300" />
        </form>
    </div>
    <!-- Latest articles -->
    <p class="flex justify-center text-center my-3 font-light">
        <x-site.url model="before" class="flex before:content-[''] before:w-[8px] before:h-[1.5px] before:left-0 before:scale-x-[1] before:bg-gray-500" />
        <x-site.url model="default" value="The Latest Articles" class="ml-2.5 mr-1 text-[25px]" />
        <x-site.url model="before" class="flex before:content-[''] before:w-[8px] before:h-[1.5px] before:right-0 before:scale-x-[1] before:bg-gray-500" />
    </p>
    <div class="grid grid-cols-3 gap-4">
        <div class="lg:col-auto col-span-full flex flex-col">
           <div class="w-full h-52 rounded-lg mb-3 bg-green-200">

           </div>
           <h1 class="text-[25px] tracking-wide">Title</h1>
           <div class="flex items-center py-2">
             <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
             <span class="text-slate-500 text-[12px] lg:text-[12px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
           </div>
        </div>
        <div class="lg:col-auto col-span-full flex flex-col">
           <div class="w-full h-52 rounded-lg mb-3 bg-blue-200">

           </div>
           <h1 class="text-[25px] tracking-wide">Title</h1>
           <div class="flex items-center py-2">
             <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
             <span class="text-slate-500 text-[12px] lg:text-[12px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
           </div>
        </div>
        <div class="lg:col-auto col-span-full flex flex-col">
           <div class="w-full h-52 rounded-lg mb-3 bg-orange-200">

           </div>
           <h1 class="text-[25px] tracking-wide">Title</h1>
           <div class="flex items-center py-2">
             <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
             <span class="text-slate-500 text-[12px] lg:text-[12px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
           </div>
        </div>
    </div>
</main>
@endsection
