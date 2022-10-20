@extends('layouts.global')
@section('title', 'Welcome')
@section('global')
    <main class="px-3 md:px-5 py-2 md:py-3">
      <!-- slider -->
      <div class="grid grid-cols-2 gap-3 mt-5 p-2 sm:p-8">
         <div class="sm:mb-0 mb-5 sm:order-first order-last lg:col-auto col-span-full flex items-center">
            <div class="flex flex-col items-center hover:scale-105 transition-all duration-700">
               <p class="sm:text-[28px] font-light text-center text-gray-600 dark:text-slate-200" style="font-family: 'Varela Round', sans-serif;">
                  <span class="sm:text-[35px] font-bold text-orange-400">Push Code</span> provides free tools for
                  <span class="sm:text-[35px] font-bold text-blue-400">everyone</span>, and allows everyone to participate in its final
                  <span class="sm:text-[35px] font-bold text-green-400">development.</span>
               </p>
               <a href="{{route('register')}}" class="cursor-pointer bg-[#4965ab] text-white rounded p-2 px-3 mt-2 transition-all duration-500 hover:scale-110">
                     Sign Up Now
               </a>
            </div>
         </div>
         <div class="lg:col-auto col-span-full flex justify-center">
            <img class="hover:scale-105 transition-all duration-700 sm:w-[10] sm:h-[10]" src="{{asset('img/ilustraciones/family_reunion.png')}}" alt="" width="500">
         </div>

      </div>
   </main>
@endsection
