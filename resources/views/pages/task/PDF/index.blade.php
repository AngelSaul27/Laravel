@extends('layouts.app')
@section('title','PDF - Report')
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 mt-5" clase="hover:text-white" value="Home" location="/">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-white" value="PDF" />
        <x-site.breadcrumb-item model="disabled" clase="text-slate-600" value="Activitys" />
    </x-site.breadcrumb>

    <div class="flex lg:flex-row flex-col gap-4 w-full my-8" id="fixed_panel">
        <!-- Content Document -->
        <div class="relative w-full lg:w-8/12 font-light text-sm border border-slate-200 dark:border-none">
            <div class="absolute flex items-center justify-between w-full p-3 text-white bg-gray-600 z-10">
                <div class="flex items-center overflow-x-auto hidenXscrollbar">
                    <p class="min-w-max mr-3">Preview Report</p>
                    <span data-tooltip-target="tooltip" data-tooltip-message="Undo" class="min-w-max mx-2 cursor-pointer">
                        <x-site.svg model="none" path="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                    </span>
                    <span data-tooltip-target="tooltip" data-tooltip-message="Maximize" class="min-w-max mx-2 cursor-pointer">
                        <x-site.svg model="none" path="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </span>
                    <span data-tooltip-target="tooltip" data-tooltip-message="Minimize" class="min-w-max mx-2 cursor-pointer">
                        <x-site.svg model="none" path="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </span>
                    <span data-tooltip-target="tooltip" data-tooltip-message="Templates" class="min-w-max mx-2 cursor-pointer">
                        <x-site.svg model="none" path="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7" />
                    </span>
                    <span data-tooltip-target="tooltip"  onclick="fixed_panel('#container_document', 'overflow-y-auto overflow-hidden', false); fixed_panel('.lock_btn', 'hidden', false);" class="min-w-max mx-2 cursor-pointer" >
                        <x-site.svg model="none" class="lock_btn select-none" data-tooltip-target="tooltip" data-tooltip-message="Blocked" path="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        <x-site.svg model="none" class="lock_btn hidden" data-tooltip-target="tooltip" data-tooltip-message="UnBlocked" path="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                    </span>
                </div>
                <x-site.url href="#fixed_panel" model="default" class="min-w-max ml-2 cursor-pointer" onclick="fixed_panel('.fixed_board', 'hidden', true);">
                    <x-site.svg model="none" data-tooltip-target="tooltip" data-tooltip-message="Fixed" class="fixed_board w-4 h-4" path="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    <x-site.svg model="fill" data-tooltip-target="tooltip" data-tooltip-message="UnFixed" class="fixed_board w-4 h-4 hidden" path="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z" />
                </x-site.url>
            </div>
            <!-- Document -->
            <div  id="container_document" class="bg-gray-300 max-h-screen overflow-y-auto rounded-t-lg p-4 pt-16 pb-8 scrollYmax5">
                <div class="bg-white min-w-[21cm] min-h-[27.9cm] rounded-md border">
                    @include('templates.Task.default_preview');
                </div>
            </div>
        </div>
        <!-- Options Panel For Document -->
        <div class="relative w-full lg:w-4/12 sm:h-screen sm:max-h-screen border bg-slate-100 border-slate-200 dark:border-none">
            <div class="absolute flex items-center justify-between w-full p-3 text-white bg-gray-600">
                <p class="min-w-max font-light text-sm">Configuration PDF</p>
                <x-site.url href="#fixed_panel" model="default" class="min-w-max ml-2 cursor-pointer" onclick="fixed_panel('.fixed_board', 'hidden', true);">
                    <x-site.svg model="none" data-tooltip-target="tooltip" data-tooltip-message="Fixed" class="fixed_board w-4 h-4" path="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    <x-site.svg model="fill" data-tooltip-target="tooltip" data-tooltip-message="UnFixed" class="fixed_board w-4 h-4 hidden" path="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z" />
                </x-site.url>
            </div>
            <div class="overflow-y-auto h-screen max-h-screen scrollYmax5 pt-11 font-light tracking-wide text-slate-500">
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Information_content" onclick="changueIconBtn('information_icon')">
                    <x-site.svg model="none" class="text-blue-400 w-4 h-4" path="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <span class="ml-2">Information</span>
                    <x-site.svg model="none" class="information_icon w-4 h-4 absolute right-4" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="information_icon w-4 h-4 absolute right-4 hidden" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Information_content" class="border-b hidden p-3 text-[15px] font-light text-justify">
                    <p>Welcome to our document generator, all your activities will be displayed here, although you can modify which activities you do not want to use, the appearance of the document and choose from many other templates.<br> We remind you that the information entered here will only be saved if you indicate so and will be deleted in 15 days.</p>
                    <p class="text-red-500 italic">Currently we note that you do not have any activities, however, you can modify this template, please note that the information inserted here will not be stored.</p>
                </div>
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Appareance_content" onclick="changueIconBtn('appareance_icon')">
                    <x-site.svg model="none" class="text-purple-400 w-4 h-4" path="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    <span class="ml-2">Appareance</span>
                    <x-site.svg model="none" class="appareance_icon w-4 h-4 absolute right-4" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="appareance_icon w-4 h-4 absolute right-4 hidden" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Appareance_content" class="border-b hidden p-3 text-[15px] font-light">

                </div>
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Setting_content" onclick="changueIconBtn('settings_icon')">
                    <x-site.svg model="none-2" class="text-red-400 w-4 h-4" path="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" path2="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <span class="ml-2">Setting</span>
                    <x-site.svg model="none" class="settings_icon w-4 h-4 absolute right-4" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="settings_icon w-4 h-4 absolute right-4 hidden" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Setting_content" class="border-b hidden p-3 text-[15px] font-light">

                </div>
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Converted_content" onclick="changueIconBtn('convert_icon')">
                    <x-site.svg model="none" class="text-green-400 w-4 h-4" path="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    <span class="ml-2">PDF to IMG</span>
                    <x-site.svg model="none" class="convert_icon w-4 h-4 absolute right-4" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="convert_icon w-4 h-4 absolute right-4 hidden" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Converted_content" class="border-b hidden p-3 text-[15px] font-light">

                </div>
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Utilities_content" onclick="changueIconBtn('utilities_icon')">
                    <x-site.svg model="none" class="text-orange-400 w-4 h-4" path="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    <span class="ml-2">Utilities</span>
                    <x-site.svg model="none" class="utilities_icon w-4 h-4 absolute right-4" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="utilities_icon w-4 h-4 absolute right-4 hidden" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Utilities_content" class="border-b hidden p-3 text-[15px] font-light">

                </div>
                <x-site.url model="default" class="relative border-b py-2 px-3 items-center cursor-pointer" data-accordion-reference="Preview_content" onclick="changueIconBtn('preview_icon')">
                    <x-site.svg model="none" class="text-cyan-400 w-4 h-4" path="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    <span class="ml-2">Preview & Download</span>
                    <x-site.svg model="none" class="preview_icon w-4 h-4 absolute right-4 hidden" path="M19 9l-7 7-7-7" />
                    <x-site.svg model="none" class="preview_icon w-4 h-4 absolute right-4" path="M5 15l7-7 7 7" />
                </x-site.url>
                <div id="Preview_content" class="flex flex-wrap gap-1 sm:gap-2 border-b p-3 py-2 text-[15px] font-light">
                    <form action="" method="post">
                       <x-site.button fill="none" class="w-max bg-green-400 text-white my-0" value="Default PDF" />
                    </form>
                    <x-site.button fill="none" class="bg-green-400 text-white my-0 w-max max-w-max" value="Custom PDF" />
                    <form action="" method="post" target="_blank">
                        <x-site.button fill="none" class="w-max bg-slate-400 text-white my-0" value="Preview PDF" />
                    </form>
                </div>
                <!-- end -->
                <div class="my-2 flex flex-col justify-center items-flex text-sm text-slate-500 font-light text-[15px] text-center p-4">
                    <p>Welcome, the current system is under construction so it may have some bugs, we hope you will forgive us for that, but we also recommend using it on a computer for a better experience.</p>
                    <x-site.svg class="mx-auto block text-yellow-400" model="none" path="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                 </div>
              </div>
            </div>
        </div>
    </div>
    <span id="tooltip" role="tooltip" class="absolute invisible z-10 p-1 shadow-lg bg-slate-700 text-white font-light text-sm rounded-sm"></span>
</main>
@endsection
@section('js')
<script src="{{asset('js/app/pdf/app.js')}}"></script>
<script src="{{asset('js/components/accordion.js')}}"></script>
<script src="{{asset('js/components/tooltip.js')}}"></script>
@endsection
