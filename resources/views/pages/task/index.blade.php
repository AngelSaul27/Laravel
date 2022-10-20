@extends('layouts.app')
@section('title', 'App | Tasks')
@section('css')
<link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
@endsection
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 mt-5" clase="hover:text-slate-400 dark:hover:text-white" value="Home" location="{{route('dashboard')}}">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-slate-400 dark:hover:text-white" value="APPS" />
        <x-site.breadcrumb-item model="disabled" clase="text-slate-600" value="Activity" />
    </x-site.breadcrumb>

    <div id="id_board_render">
        @include('components.task.board-render')
    </div>

    <p class="text-xl font-light text-slate-500 dark:text-slate-400">Generate Reports</p>

    <div class="flex gap-2 py-2 mb-3">
        <x-site.url model="icon-right" value="Activity Reports" href="{{route('app.task.pdf')}}" class="w-max min-w-[205px] py-1.5 justify-center items-center dark:bg-slate-500 bg-slate-400 rounded-sm text-white font-light text-sm hover:translate-y-0 sm:hover:-translate-y-1">
            <x-site.svg model="none" class="ml-2" path="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </x-site.url>
        <x-site.url model="icon-right" value="Activity Calendar" href="#" class="sm:flex hidden w-max min-w-[205px] py-1.5 justify-center items-center dark:bg-slate-500 bg-slate-400 rounded-sm text-white font-light text-sm hover:translate-y-0 sm:hover:-translate-y-1 sm:ml-0 mr-8">
            <x-site.svg model="none" class="ml-2" path="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </x-site.url>
        <x-site.url model="default" class="sm:hidden dark:text-slate-300 text-slate-300 p-2 rounded-md cursor-pointer" data-dropdown-toggle="toggle_generated">
            <x-site.svg model="none" class="flex mr-1 w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </x-site.url>
        <x-site.dropdown type="default" id="toggle_generated">
            <x-site.url model="icon-right" value="Activity Calendar" href="#" class="w-max p-1.5 justify-center items-center dark:hover:bg-slate-600 hover:bg-slate-400 font-light text-sm">
                <x-site.svg model="none" class="ml-2" path="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </x-site.url>
        </x-site.dropdown>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 mt-4 text-slate-600 dark:text-slate-300 font-light">
        <div class="containers_tasks" id="fixed_today_id">
            <div class="flex items-center justify-between h-max select-none">
                <h1>Today's Activities</h1>
                <ul class="flex items-center gap-4 sm:mr-3">
                    <li data-tooltip-target="tooltip" data-tooltip-message="New Activity" onclick="createTask()">
                        <x-site.svg model="fill" class="cursor-pointer w-4 h-4" path="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </li>
                    <li onclick="fixed_panel('.fixed_board', 'hidden', true);">
                        <a href="#fixed_today_id">
                            <x-site.svg model="none" data-tooltip-target="tooltip" data-tooltip-message="Fixed" class="fixed_board w-4 h-4" path="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            <x-site.svg model="fill" data-tooltip-target="tooltip" data-tooltip-message="UnFixed" class="fixed_board w-4 h-4 hidden" path="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z" />
                        </a>
                    </li>
                    <li>
                        <x-site.svg model="fill" class="w-4 h-4 cursor-pointer" data-dropdown-toggle="Togglet_HeadBoard_today" path="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        <x-site.dropdown id="Togglet_HeadBoard_today" type="default" class="shadow">
                            <li>
                                <x-site.url model="icon-left" value="hidden" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none" class="w-4 h-4 mr-1" path="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </x-site.url>
                            </li>
                            <li>
                                <x-site.url model="icon-left" value="show" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 hidden visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none-2" class="w-4 h-4 mr-1" path="M15 12a3 3 0 11-6 0 3 3 0 016 0z" path2="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </x-site.url>
                            </li>
                        </x-site.dropdown>
                    </li>
                </ul>
            </div>
            <!-- container items -->
            <div id="task_layout_1" class="flex flex-col gap-4 w-full max-h-[520px] px-2 pr-3 py-4 overflow-y-auto">
                @include('components.task.task-layout-one')
            </div>
        </div>
        <div class="containers_tasks" id="fixed_process_id">
            <div class="flex items-center justify-between h-max select-none">
                <h1>In Process</h1>
                <ul class="flex items-center gap-4 sm:mr-3">
                    <li data-tooltip-target="tooltip" data-tooltip-message="New Activity" onclick="createTask()">
                        <x-site.svg model="fill" class="cursor-pointer w-4 h-4" path="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </li>
                    <li onclick="fixed_panel('.fixed_board', 'hidden', true);">
                        <a href="#fixed_process_id">
                            <x-site.svg model="none" data-tooltip-target="tooltip" data-tooltip-message="Fixed" class="fixed_board w-4 h-4" path="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            <x-site.svg model="fill" data-tooltip-target="tooltip" data-tooltip-message="UnFixed" class="fixed_board w-4 h-4 hidden" path="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z" />
                        </a>
                    </li>
                    <li>
                        <x-site.svg model="fill" class="w-4 h-4 cursor-pointer" data-dropdown-toggle="Togglet_HeadBoard_process" path="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        <x-site.dropdown id="Togglet_HeadBoard_process" type="default" class="shadow">
                            <li>
                                <x-site.url model="icon-left" value="hidden" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none" class="w-4 h-4 mr-1" path="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </x-site.url>
                            </li>
                            <li>
                                <x-site.url model="icon-left" value="show" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 hidden visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none-2" class="w-4 h-4 mr-1" path="M15 12a3 3 0 11-6 0 3 3 0 016 0z" path2="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </x-site.url>
                            </li>
                        </x-site.dropdown>
                    </li>
                </ul>
            </div>
            <!-- container items -->
            <div id="task_layout_2" class="flex flex-col gap-4 w-full max-h-[520px] px-2 pr-3 py-4 overflow-y-auto">
                @include('components.task.task-layout-two')
            </div>
        </div>
        <div class="containers_tasks" id="fixed_complete_id">
            <div class="flex items-center justify-between h-max select-none">
                <h1>Completed</h1>
                <ul class="flex items-center gap-4">
                    <li data-tooltip-target="tooltip" data-tooltip-message="New Activity" onclick="createTask()">
                        <x-site.svg model="fill" class="cursor-pointer w-4 h-4" path="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </li>
                    <li onclick="fixed_panel('.fixed_board', 'hidden', true);">
                        <a href="#fixed_complete_id">
                            <x-site.svg model="none" data-tooltip-target="tooltip" data-tooltip-message="Fixed" class="fixed_board w-4 h-4" path="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            <x-site.svg model="fill" data-tooltip-target="tooltip" data-tooltip-message="UnFixed" class="fixed_board w-4 h-4 hidden" path="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 110-2h4a1 1 0 011 1v4a1 1 0 11-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 112 0v1.586l2.293-2.293a1 1 0 011.414 1.414L6.414 15H8a1 1 0 110 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 110-2h1.586l-2.293-2.293a1 1 0 011.414-1.414L15 13.586V12a1 1 0 011-1z" />
                        </a>
                    </li>
                    <li>
                        <x-site.svg model="fill" class="w-4 h-4 cursor-pointer" data-dropdown-toggle="Togglet_HeadBoard_complete" path="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        <x-site.dropdown id="Togglet_HeadBoard_complete" type="default" class="shadow">
                            <li>
                                <x-site.url model="icon-left" value="hidden" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none" class="w-4 h-4 mr-1" path="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </x-site.url>
                            </li>
                            <li>
                                <x-site.url model="icon-left" value="show" class="items-center cursor-pointer p-2 hover:bg-slate-200 dark:hover:bg-slate-500 hidden visuality_btn"> <!-- Options -->
                                    <x-site.svg model="none-2" class="w-4 h-4 mr-1" path="M15 12a3 3 0 11-6 0 3 3 0 016 0z" path2="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </x-site.url>
                            </li>
                        </x-site.dropdown>
                    </li>
                </ul>
            </div>
            <!-- container items -->
            <div id="task_layout_3" class="flex flex-col gap-4 w-full max-h-[520px] px-2 pr-3 py-4 overflow-y-auto">
                @include('components.task.task-layout-three')
            </div>
        </div>
    </div>
</main>

@include('components.task.modal')
@include('components.task.modal-confirm')

<span id="tooltip" role="tooltip" class="invisible z-10 p-1 shadow-lg bg-slate-700 text-white font-light text-sm rounded-sm"></span>

@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{asset('js/app/task/app.js')}}"></script>
<script src="{{asset('js/components/drop_select.js')}}"></script>
<script src="{{asset('js/components/picker_color.js')}}"></script>
<script src="{{asset('js/components/tooltip.js')}}"></script>
@endsection
