<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <script type="text/javascript" src="{{asset('js/local.js')}}"></script>
    @yield('css')
    <title>@yield('title', 'Push Code')</title>
</head>
<body class="dark:bg-slate-800/95 transition-all duration-300">

    <x-app-navegation>
        <li class="mr-2">
            <x-site.url class="items-center" model="icon-left" value="Dashboard" href="{{url('dashboard')}}">
               <x-site.svg model="none" class="mr-1" path="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </x-site.url>
        </li>
        <li class="mr-2">
            <x-site.url model="icon-x" value="Account" class="items-center cursor-pointer" data-dropdown-toggle="Account-togglet">
               <x-site.svg model="none" class="mr-1" path="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
               <x-slot:slot2>
                  <x-site.svg model="none" class="ml-1 w-3" path="M19 9l-7 7-7-7" />
               </x-slot:slot2>
            </x-site.url>
            <x-site.dropdown id="Account-togglet" type="default" class="w-max">
               <li>
                  <x-site.url model="default" value="Profile" href="{{route('profile')}}" class="font-light inline-block justify-center py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500" />
               </li>
               <li>
                  <x-site.url model="default" value="Chat" href="{{route('profile.chat')}}" class="font-light inline-block justify-center py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500" />
               </li>
            </x-site.dropdown>
        </li>
        <li class="mr-2">
            <x-site.url model="icon-x" value="Apps" class="items-center cursor-pointer" data-dropdown-toggle="Apps-togglet">
               <x-site.svg model="none" class="mr-1" path="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
               <x-slot:slot2>
                  <x-site.svg model="none" class="ml-1 w-3" path="M19 9l-7 7-7-7" />
               </x-slot:slot2>
            </x-site.url>
            <x-site.dropdown id="Apps-togglet" type="default" class="w-max">
               <li>
                  <x-site.url model="default" value="Activity" href="{{route('app.activity')}}" class="font-light inline-block justify-center py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500" />
               </li>
               <li>
                  <x-site.url model="default" value="Projects" href="{{route('app.project.index')}}" class="font-light inline-block justify-center py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500" />
               </li>
               <li>
                  <x-site.url model="default" value="Finance" href="{{route('app.finance')}}" class="font-light inline-block justify-center py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500" />
               </li>
            </x-site.dropdown>
        </li>
        <li class="mr-2">
            <x-site.url model="icon-x" value="Utilities" class="items-center cursor-pointer" data-dropdown-toggle="Utilities-togglet">
               <x-site.svg model="none" class="mr-1" path="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
               <x-slot:slot2>
                  <x-site.svg model="none" class="ml-1 w-3" path="M19 9l-7 7-7-7" />
               </x-slot:slot2>
            </x-site.url>
            <x-site.dropdown id="Utilities-togglet" type="default" class="w-max">
               <li>
                  <x-site.url model="default" value="Calendar" class="font-light block py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500 cursor-pointer" />
               </li>
               <li>
                  <x-site.url model="default" value="Create Charts" class="font-light block py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500 cursor-pointer" />
               </li>
               <li>
                  <x-site.url model="default" value="Create Reports" class="font-light block py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500 cursor-pointer" />
               </li>
               <li>
                  <x-site.url model="default" value="Calculator" class="font-light block py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500 cursor-pointer" />
               </li>
            </x-site.dropdown>
        </li>
        <li class="mr-2">
            <x-site.url model="icon-left" class="w-max items-center" value="Blog & News" href="/blog">
               <x-site.svg model="none" class="mr-1" path="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </x-site.url>
        </li>
        <li class="sm:mr-2 mr-8">
            <x-site.url model="icon-left" class="items-center" value="Support" href="">
               <x-site.svg model="none" class="mr-1" path="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </x-site.url>
        </li>
    </x-app-navegation>

    <x-alert/>

    @yield('content')

    <x-footer />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script type="text/javascript" src="{{asset('js/layout/app.js')}}"></script>
    @yield('js')
</body>
</html>
