@extends('layouts.blog')
@section('title', 'Blog | Push Code')
@section('global')

<x-carousel.content data-carousel="slide" _controls="true"
   :container="('max-[400px] lg:max-h-[510px] h-[400px] lg:h-[510px] overflow:hidden rounded-none')" 
   :nextattr="('transition-all duration-700 rounded-md')" 
   :prevattr="('transition-all duration-700 rounded-md')" 
   :prevbg="('-mt-[10px] lg:mt-[0px] bg-slate-400/30 group-hover:bg-slate-700/50 transition-all duration-500')" 
   :nextbg="('-mt-[10px] lg:mt-[0px] bg-slate-400/30 group-hover:bg-slate-700/50 transition-all duration-500')"> 
   <x-carousel.item>
      <div class="grid grid-cols-3">
         <!-- col 1 -->
         <div class="lg:col-span-2 col-span-full h-[250px] lg:h-[510px]">
           <div class="bg-red-300 flex items-center h-full"></div>
         </div>
         <!-- col 2 -->
         <div class="lg:col-span-1 col-span-full h-[150px] lg:h-[510px]">
           <div class="flex flex-col justify-center px-4 bg-[#f9fafb] h-full">
             <x-site.url model="before" href="#" class="w-max text-slate-700 text-1.5xl lg:text-3xl font-semibold tracking-wider before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-blue-200">
               API Key Security
             </x-site.url>
             <div class="flex items-center py-2">
               <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
               <span class="text-slate-500 text-[12px] lg:text-[14px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
             </div>
           </div>
         </div>
      </div>
   </x-carousel.item>
   <x-carousel.item>
      <div class="grid grid-cols-3">
         <!-- col 1 -->
         <div class="lg:col-span-2 col-span-full h-[250px] lg:h-[510px]">
           <div class="bg-blue-300 flex items-center h-full"></div>
         </div>
         <!-- col 2 -->
         <div class="lg:col-span-1 col-span-full h-[150px] lg:h-[510px]">
           <div class="flex flex-col justify-center px-4 bg-[#f9fafb] h-full">
             <x-site.url model="before" href="#" class="w-max text-slate-700 text-1.5xl lg:text-3xl font-semibold tracking-wider before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-blue-200">
               API Key Security
             </x-site.url>
             <div class="flex items-center py-2">
               <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
               <span class="text-slate-500 text-[12px] lg:text-[14px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
             </div>
           </div>
         </div>
      </div>
   </x-carousel.item>
   <x-carousel.item>
      <div class="grid grid-cols-3">
         <!-- col 1 -->
         <div class="lg:col-span-2 col-span-full h-[250px] lg:h-[510px]">
           <div class="bg-orange-300 flex items-center h-full"></div>
         </div>
         <!-- col 2 -->
         <div class="lg:col-span-1 col-span-full h-[150px] lg:h-[510px]">
           <div class="flex flex-col justify-center px-4 bg-[#f9fafb] h-full">
             <x-site.url model="before" href="#" class="w-max text-slate-700 text-1.5xl lg:text-3xl font-semibold tracking-wider before:content-[''] before:h-[4px] before:rounded-[4px] before:bottom-0 before:scale-x-[0] hover:before:scale-x-[1] before:bg-blue-200">
               API Key Security
             </x-site.url>
             <div class="flex items-center py-2">
               <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
               <span class="text-slate-500 text-[12px] lg:text-[14px]">Team Push Code | <span class="text-slate-400">03/06/2022</span></span>
             </div>
           </div>
         </div>
      </div>
   </x-carousel.item>
</x-carousel.content>

<main class="px-3 md:px-5 py-2 md:py-3 dark:text-slate-200 text-slate-600">
   <h3 class="text-2xl text-center tracking-wider font-semibold mt-5">All you 
      <span class="text-green-300">need</span> to know is <span class="text-orange-300">here!</span>
   </h3>
   <svg class="mx-auto my-2" baseProfile="full" width="60" height="4" xmlns="http://www.w3.org/2000/svg">
      <rect rx="2" ry="2" width="50px" height="5px" fill="#94a3b8" />
   </svg>
   <p class="text-center text-[14px] tracking-wider font-[300] dark:text-slate-200 text-slate-500">- Top Categories -</p>

   <!-- options - guides - apps - support -->
   <div class="flex flex-col md:flex-row items-center justify-center my-5 text-white">
      <div class="max-w-[255px] max-h-[194px] w-[255px] h-[194px] m-2 p-2 bg-orange-200 rounded-md">
         <div class="flex items-center justify-center h-full rounded-md border-2 border-slate-600 border-dashed bg-top bg-cover" style="background-image: url('{{asset('img/ilustraciones/phone_view.png')}}')">
            <x-site.url model="default" href="" value="Apps" class="bg-gray-700 px-3 py-2 rounded-sm shadow-lg w-max" />
         </div>
      </div>
      <div class="max-w-[255px] max-h-[194px] w-[255px] h-[194px] m-2 p-2 bg-blue-200 rounded-md">
         <div class="flex items-center justify-center h-full rounded-md border-2 border-slate-600 border-dashed bg-center bg-cover" style="background-image: url('{{asset('img/ilustraciones/activity_board.png')}}')">
            <x-site.url model="default" href="" value="Guides" class="bg-gray-700 px-3 py-2 rounded-sm shadow-lg w-max" />
         </div>
      </div>
      <div class="max-w-[255px] max-h-[194px] w-[255px] h-[194px] m-2 p-2 bg-purple-200 rounded-md">
         <div class="flex items-center justify-center h-full rounded-md border-2 border-slate-600 border-dashed bg-center bg-cover" style="background-image: url('{{asset('img/ilustraciones/support.png')}}')">
            <x-site.url model="default" href="" value="Supports" class="bg-gray-700 px-3 py-2 rounded-sm shadow-lg w-max" />
         </div>
      </div>
   </div>

   <div class="text-center text-[23px] tracking-wider font-[300] my-5">- The Latest Articles -</div>

   <!-- Others Articles -->
   <div class="grid grid-cols-2 gap-0 sm:gap-2 mt-5"> 
      <div class="lg:col-auto col-span-full">
         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-green-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400">

               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
               <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
               <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>

         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-blue-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400 ">

               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
                  <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
                  <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>

         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-orange-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400 ">
                  
               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
               <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
               <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>
      </div>
      <!-- left -->
      <div class="lg:col-auto col-span-full">
         <!-- item 4 -->
         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-purple-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400 ">

               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
                  <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
                  <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>
         <!-- item 5 -->
         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-yellow-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400 ">

               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
                  <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
                  <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>
         <!-- item 6 -->
         <div class="flex items-center flex-col sm:flex-row justify-center sm:justify-left my-3 hover:scale-[1.01] transition-all duration-300">
            <div class="sm:w-[200px] sm:min-w-[200px] w-full min-w-full h-[200px] rounded-md bg-green-100 p-2">
               <div class="border-2 border-dashed w-full h-full border-white dark:border-slate-400 ">

               </div>
            </div>
            <div class="flex flex-col max-w-[390px] sm:text-left text-center mt-2 sm:mt-0 ml-3 dark:text-white">
               <span class="cursor-pointer mb-1 dark:text-slate-200 dark:hover:text-green-200 hover:text-green-700">Title For News</span>
               <span class="text-[14px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias eaque reprehenderit.</span>
               <div class="flex sm:mx-0 mx-auto items-center py-1">
                  <span class="bg-slate-500 mr-1 p-1 lg:p-1.5 rounded-full"></span>
                  <span class="dark:text-slate-500 text-[12px] lg:text-[14px]"> Team Push Code | <span class="dark:text-slate-500 text-gray-400">03/06/2022</span></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
