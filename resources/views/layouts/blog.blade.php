<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script type="text/javascript" src="{{asset('js/local.js')}}"></script>
   <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
   @yield('css')
   <title>@yield('title', 'Push-Code')</title>
</head>
<body class="dark:bg-slate-800/95 transition-all duration-300">
   <x-navegation>
      <li class="mx-2.5 sm:flex hidden">
         <x-site.url class="before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-green-200" href="{{route('blog')}}" value="Home" model="before" />
      </li>
      <li class="mx-2.5 sm:flex hidden">
         <x-site.url class="before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-purple-200" href="Apps" value="Blog" model="before" />
      </li>
      <li class="mx-2.5 sm:flex hidden">
         <x-site.url class="before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-orange-200" href="" value="Guides" model="before" />
      </li>
      <li class="mx-2.5 md:flex hidden">
         <x-site.url class="before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-blue-200" href="" value="Support" model="before" />
      </li>
      <li class="mx-1.5 sm:flex hidden">
         <x-site.url type="button" class="theme-toggle hover:-translate-y-1 cursor-pointer p-1 hover:bg-slate-300 dark:hover:text-white dark:hover:bg-slate-600 rounded" model="default">
            <x-site.svg class="theme-toggle-dark w-4 h-4 hidden" model="fill" path="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
            <x-site.svg class="theme-toggle-light w-4 h-4 hidden" model="fill" path="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
         </x-site.url>
      </li>
      @if(!auth()->check())
      <li class="mx-2.5">
         <x-site.url class="hover:-translate-y-1 cursor-pointer" href="{{route('login')}}" value="Login" model="default" />
      </li>
      <li class="mx-2.5">
         <x-site.url class="px-2 py-1 bg-green-600 text-white rounded-sm hover:-translate-y-1 cursor-pointer shadow" href="{{route('register')}}" value="Sign Up" model="default" />
      </li>
      @else
      <li class="mx-2.5">
         <x-site.url class="px-2 py-1 bg-green-600 text-white rounded-sm hover:-translate-y-1 cursor-pointer shadow" href="{{route('dashboard')}}" value="Dashboard" model="default" />
      </li>
      @endif
   </x-navegation>

   <x-alert/>

   @yield('global')

   <x-footer />

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
   <script type="text/javascript" src="{{asset('js/layout/app.js')}}"></script>
   @yield('js')
</body>
</html>
