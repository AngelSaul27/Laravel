<div class="fixed md:px-0 px-4 py-10 flex items-center justify-center inset-0 z-40 bg-black/50 dark:text-slate-300 text-slate-600" id="modal_form_task" style="display: none">
    <div id="modal_form_task-target" class="w-full max-w-[860px] h-full max-h-[550px] bg-slate-100 dark:bg-slate-600 rounded-md drop-shadow-2xl overflow-hidden" style="display: none">
        <div class="Container-Tasks relative w-full h-full">
            <div class="Header-Tasks absolute inset-x-0 top-0">
                <div class="flex items-center gap-2 justify-end p-1 bg-slate-100 dark:bg-slate-700/80 rounded-t-md">
                    <p class="w-full ml-2">New Activity</p>
                    <span class="cursor-pointer dark:hover:bg-slate-600 hover:bg-slate-200 rounded p-1">
                        <x-site.svg model="none" path="M5 15l7-7 7 7" />
                    </span>
                    <span class="cursor-pointer dark:hover:bg-slate-600 hover:bg-slate-200 rounded p-1">
                        <x-site.svg model="none" path="M19 9l-7 7-7-7" />
                    </span>
                    <span class="cursor-pointer dark:hover:bg-slate-600 hover:bg-slate-200 rounded p-1" data-dropdown-toggle="task_modal_option">
                        <x-site.svg model="none" path="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </span>
                    <x-site.dropdown type="fill-none" id="task_modal_option" class="bg-slate-100 dark:bg-slate-600">
                        <x-site.url model="default" value="Generated PDF" class="font-light block py-2 px-2 hover:bg-gray-200 dark:hover:bg-slate-500 cursor-pointer" />
                        <x-site.url model="default" value="Deleted" class="font-light block py-2 px-2 hover:bg-gray-200 dark:hover:bg-slate-500 cursor-pointer" />
                    </x-site.dropdown>
                    <span class="cursor-pointer dark:hover:bg-slate-600 hover:bg-slate-200 rounded p-1" onclick="close_modal('#modal_form_task');">
                        <x-site.svg model="none" path="M6 18L18 6M6 6l12 12" />
                    </span>
                </div>
            </div>
            <form method="post" action="{{route('app.task.store')}}" id="id_form_task" class=" md:divide-y divide-slate-300 dark:divide-slate-500">
                @csrf
                {{method_field('PATCH')}}
                <div class="Body-Tasks absolute inset-x-0 bottom-0 top-9">
                    <div class="relative h-full overflow-y-auto md:overflow-hidden md:divide-x divide-slate-300 dark:divide-slate-500">
                        <div class="md:absolute left-0 inset-y-0 w-full md:w-3/4 px-4">
                            <div class="relative h-full overflow-y-scroll hidenYscrollbar">
                                <div class="flex flex-col gap-2 py-3 md:overflow-y-auto hidenYscrollbar px-4" id="form-container-edit">
                                    <x-site.label value="Title" class="text-[18px] font-[300] my-0" model="label" />
                                    <x-site.input model="default" class="w-full bg-slate-50 dark:bg-slate-500/50" name="name" type="text" />
                                    <x-site.label value="Description" class="text-[18px] font-[300] my-0" model="label" />
                                    <x-site.input model="area" class="w-full h-40 bg-slate-50 dark:bg-slate-500/50" name="description" type="text"></x-site.input>
                                </div>
                            </div>
                        </div>
                        <div class="md:absolute right-0 inset-y-0 w-full md:w-1/4 px-2">
                            <div class="relative h-full overflow-y-scroll hidenYscrollbar px-1">
                                <div class="flex flex-col md:items-start items-center text-[15px] font-light">

                                    <x-site.label model="label" value="Type Activity" class="ml-1 tracking-wide" />
                                    <span id="btn_dropdown_type" class="flex md:w-full p-1 select-none focus:ring-2 dark:ring-slate-500 rounded" tabindex="0" data-dropdown-toggle="select-type" data-drop-select="Select Type">
                                        <x-site.svg model="none" class="mr-2 min-w-max w-max" path="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </span>
                                    <!-- dropdown -->
                                    <x-site.dropdown id="select-type" type="fill-none" class="bg-slate-100 dark:bg-[#445264] text-center">
                                        <input type="text" name="type" style="display: none !important">
                                        <x-site.url data-value="School" model="icon-left" value="School" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="special-slot" class="mr-2 min-w-max w-max dark:text-purple-300 text-purple-400">
                                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </x-site.svg>
                                        </x-site.url>
                                        <x-site.url data-value="Private" model="icon-left" value="Private" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-blue-300 text-blue-400" path="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                        </x-site.url>
                                        <x-site.url data-value="Family" model="icon-left" value="Family" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-teal-300 text-teal-400" path="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </x-site.url>
                                        <x-site.url data-value="Work" model="icon-left" value="Work" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-green-300 text-green-400" path="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </x-site.url>
                                        <x-site.url data-value="Other" model="icon-left" value="Other" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-amber-300 text-amber-400" path="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                        </x-site.url>
                                    </x-site.dropdown>


                                    <x-site.label model="label" value="Status Activity" class="ml-1 tracking-wide" />
                                    <span id="btn_dropdown_status" class="flex md:w-full p-1 select-none focus:ring-2 dark:ring-slate-500 rounded" tabindex="0" data-dropdown-toggle="select-status" data-drop-select="Select status">
                                        <x-site.svg model="none" class="mr-2 min-w-max w-max" path="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                    </span>
                                    <!-- dropdown -->
                                    <x-site.dropdown id="select-status" type="fill-none" class="bg-slate-100 dark:bg-[#445264] text-center">
                                        <input type="text" name="status" style="display: none !important">
                                        <x-site.url data-value="Failed" model="icon-left" value="Failed" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-red-300 text-red-400" path="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </x-site.url>
                                        <x-site.url data-value="Pending" model="icon-left" value="Pending" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-blue-300 text-blue-400" path="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </x-site.url>
                                        <x-site.url data-value="Completed" model="icon-left" value="Completed" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg model="none" class="mr-2 min-w-max w-max dark:text-green-300 text-green-400" path="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </x-site.url>
                                    </x-site.dropdown>


                                    <x-site.label model="label" value="Priority Activity" class="ml-1 tracking-wide" />
                                    <span id="btn_dropdown_priority" class="flex md:w-full p-1 select-none focus:ring-2 dark:ring-slate-500 rounded" tabindex="0" data-dropdown-toggle="select-priority" data-drop-select="Select Priority">
                                        <x-site.svg model="none" class="mr-2 min-w-max w-max" path="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                    </span>
                                    <!-- dropdown -->
                                    <x-site.dropdown id="select-priority" class="bg-slate-100 dark:bg-[#445264] text-center" type="fill-none">
                                        <input type="text" name="priority" style="display: none !important">
                                        <x-site.url data-value="Low" model="icon-left" value="Low" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg class="mr-2 min-w-max w-max dark:text-blue-300 text-blue-400" path="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" model="none" />
                                        </x-site.url>
                                        <x-site.url data-value="Medium" model="icon-left" value="Medium" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg class="mr-2 min-w-max w-max dark:text-green-300 text-green-400" path="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" model="none" />
                                        </x-site.url>
                                        <x-site.url data-value="High" model="icon-left" value="High" class="px-2 py-1 cursor-pointer hover:bg-slate-200 dark:hover:bg-slate-600">
                                            <x-site.svg class="mr-2 min-w-max w-max dark:text-red-300 text-red-400" path="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" model="none" />
                                        </x-site.url>
                                    </x-site.dropdown>


                                    <x-site.label model="label" value="Start/End Activity" class="ml-1 tracking-wide" />
                                    <div class="flatpickr flex items-center">
                                        <a class="ml-1" data-toggle>
                                            <x-site.svg class="min-w-max w-max" path="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" model="none" />
                                        </a>
                                        <x-site.input type="text" name="date_extends" class="font-light text-sm md:max-w-[170px] border-0 bg-slate-100 focus:border-0 focus:ring-0 text-white" placeholder="Start Date" model="default" required data-input/>
                                    </div>

                                    <x-site.label model="label" value="Color priority" class="ml-1 tracking-wide" />
                                    <span id="btn_dropdown_color_priority" class="flex md:w-full p-1 select-none focus:ring-2 dark:ring-slate-500 rounded" tabindex="0" data-dropdown-toggle="select_color_priority" data-picker-btn="Changue Color">
                                        <x-site.svg model="none" class="mr-2 min-w-max w-max" path="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </span>
                                    <!-- dropdown -->
                                    <x-site.dropdown id="select_color_priority" type="fill-none" class="w-full h-max bg-slate-100 dark:bg-slate-600 p-2">
                                        <div class="w-max grid grid-cols-5 gap-2">
                                            <input type="text" name="color_priority" style="display:none">
                                            <x-task.picker-color style="background: #fecaca" picker-colors="#fecaca" />
                                            <x-task.picker-color style="background: #fecaca" picker-colors="#fecaca" />
                                            <x-task.picker-color style="background: #fed7aa" picker-colors="#fed7aa" />
                                            <x-task.picker-color style="background: #fef08a" picker-colors="#fef08a" />
                                            <x-task.picker-color style="background: #fde68a" picker-colors="#fde68a" />
                                            <x-task.picker-color style="background: #d9f99d" picker-colors="#d9f99d" />
                                            <x-task.picker-color style="background: #bbf7d0" picker-colors="#bbf7d0" />
                                            <x-task.picker-color style="background: #a7f3d0" picker-colors="#a7f3d0" />
                                            <x-task.picker-color style="background: #99f6e4" picker-colors="#99f6e4" />
                                            <x-task.picker-color style="background: #a5f3fc" picker-colors="#a5f3fc" />
                                            <x-task.picker-color style="background: #bae6fd" picker-colors="#bae6fd" />
                                            <x-task.picker-color style="background: #ddd6fe" picker-colors="#ddd6fe" />
                                            <x-task.picker-color style="background: #bfdbfe" picker-colors="#bfdbfe" />
                                            <x-task.picker-color style="background: #c7d2fe" picker-colors="#c7d2fe" />
                                            <x-task.picker-color style="background: #e9d5ff" picker-colors="#e9d5ff" />
                                            <x-task.picker-color style="background: #fbcfe8" picker-colors="#fbcfe8" />
                                        </div>
                                    </x-site.dropdown>

                                    <!-- color for header -->
                                    <x-site.label model="label" value="Color Header" class="ml-1 tracking-wide" />
                                    <span id="btn_dropdown_color_head" class="flex md:w-full p-1 select-none focus:ring-2 dark:ring-slate-500 rounded" tabindex="0" data-dropdown-toggle="select_color_header" data-picker-btn="Changue Color">
                                        <x-site.svg model="none" class="mr-2 min-w-max w-max" path="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </span>
                                    <!-- dropdown -->
                                    <x-site.dropdown id="select_color_header" type="fill-none" class="w-full h-max bg-slate-100 dark:bg-slate-600 p-2" required>
                                        <div class="w-max grid grid-cols-5 gap-2">
                                            <input type="text" name="color_header" style="display:none">
                                            <x-task.picker-color style="background: #fecaca" picker-colors="#fecaca" />
                                            <x-task.picker-color style="background: #fecaca" picker-colors="#fecaca" />
                                            <x-task.picker-color style="background: #fed7aa" picker-colors="#fed7aa" />
                                            <x-task.picker-color style="background: #fef08a" picker-colors="#fef08a" />
                                            <x-task.picker-color style="background: #fde68a" picker-colors="#fde68a" />
                                            <x-task.picker-color style="background: #d9f99d" picker-colors="#d9f99d" />
                                            <x-task.picker-color style="background: #bbf7d0" picker-colors="#bbf7d0" />
                                            <x-task.picker-color style="background: #a7f3d0" picker-colors="#a7f3d0" />
                                            <x-task.picker-color style="background: #99f6e4" picker-colors="#99f6e4" />
                                            <x-task.picker-color style="background: #a5f3fc" picker-colors="#a5f3fc" />
                                            <x-task.picker-color style="background: #bae6fd" picker-colors="#bae6fd" />
                                            <x-task.picker-color style="background: #ddd6fe" picker-colors="#ddd6fe" />
                                            <x-task.picker-color style="background: #bfdbfe" picker-colors="#bfdbfe" />
                                            <x-task.picker-color style="background: #c7d2fe" picker-colors="#c7d2fe" />
                                            <x-task.picker-color style="background: #e9d5ff" picker-colors="#e9d5ff" />
                                            <x-task.picker-color style="background: #fbcfe8" picker-colors="#fbcfe8" />
                                        </div>
                                    </x-site.dropdown>

                                    <x-site.button fill="none" value="Create Activity" id="id_form_submit" class="my-3 tracking-wider font-normal text-white bg-green-400 hover:-translate-y-1 transition-all duration-300 drop-shadow-lg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
