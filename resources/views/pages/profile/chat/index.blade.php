@extends('layouts.app')
@section('title', 'Profile | Chat')
@section('content')
<main class="px-3 md:px-5 py-2 md:py-3">
    <div class="lg:hidden flex flex-col my-3 w-full text-slate-500 dark:text-slate-400">
        <div class="flex items-center bg-slate-300 dark:bg-slate-500 rounded-md p-1 gap-1 dark:text-white drop-shadow-md" data-chat-panel-mobile="">
            <x-site.url model="default" value="Messages" class="w-full px-3 py-2 rounded-md justify-center shadow-xl bg-white dark:bg-slate-700 cursor-pointer" data-chat-content="messages"/>
            <x-site.url model="default" value="Contacts" class="w-full px-3 py-2 rounded-md justify-center cursor-pointer" data-chat-content="contacts"/>
        </div>
        <div id="cotainer_panel_menu_mobile">
            <div class="my-2 dark:text-white hidden" id="contacts-chat-panel-mobile">
                <p class="text-sm font-bold mb-2">Contacts</p>
                <div class="flex items-center overflow-y-hidden overflow-x-auto w-full gap-2">
                    <!-- user favorities -->
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-slate-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-orange-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-red-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-blue-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <!-- end section -->
                </div>
            </div>
            <div class="my-2 dark:text-white" id="messages-chat-panel-mobile">
                <p class="text-sm font-bold mb-2">Mensagess</p>
                <div class="flex items-center overflow-y-hidden overflow-x-auto w-full gap-2">
                    <!-- user favorities -->
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-slate-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-orange-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-red-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-blue-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                    </div>
                    <!-- end section -->
                </div>
            </div>
        </div>
    </div>
    <div class="flex lg:flex-row flex-col text-slate-500 dark:text-slate-400">
        <div class="w-full lg:w-3/12 sm:p-3 lg:flex hidden flex-col">
            <div class="flex items-center bg-slate-300 dark:bg-slate-500 rounded-md p-1 gap-1 dark:text-white drop-shadow-md" data-chat-panel="">
                <x-site.url model="default" value="Messages" class="w-full px-3 py-2 rounded-md justify-center shadow-xl bg-white dark:bg-slate-700 cursor-pointer" data-chat-content="messages"/>
                <x-site.url model="default" value="Contacts" class="w-full px-3 py-2 rounded-md justify-center cursor-pointer" data-chat-content="contacts"/>
            </div>
            <div class="favorities my-2">
                <p class="text-sm font-bold mb-2 dark:text-white">Favorities</p>
                <div class="flex items-center overflow-y-hidden overflow-x-auto w-full gap-2">
                    <!-- user favorities -->
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-slate-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                        <span class="text-sm font-light py-1.5 bg-">User Name</span>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-orange-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-red-400 bottom-0 right-0 border border-white"></span>
                        </div>
                        <span class="text-sm font-light py-1.5 bg-">User Name 2</span>
                    </div>
                    <div class="flex flex-col items-center min-w-max">
                        <div class="profile relative">
                            <div class="rounded-full bg-blue-400 p-6">
                                <!-- image -->
                            </div>
                            <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                        </div>
                        <span class="text-sm font-light py-1.5 bg-">User Name 3</span>
                    </div>
                    <!-- end section -->
                </div>
            </div>
            <div id="cotainer_panel_menu">
                <div class="hidden" id="contacts-chat-panel">
                    <p class="text-sm font-bold mb-2 dark:text-white">Contacts</p>
                    <div class="overflow-x-hidden overflow-y-auto max-h-[330px]">
                        <!-- messages -->
                        <div class="flex items-center p-1 py-2">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-slate-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <div class="absolute -top-1 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-blue-400">
                                        <x-site.svg model="none" path="M12 4v16m8-8H4" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-red-400">
                                        <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-orange-400">
                                        <x-site.svg model="none" path="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-green-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-red-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <div class="absolute -top-1 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-blue-400">
                                        <x-site.svg model="none" path="M12 4v16m8-8H4" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-red-400">
                                        <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-orange-400">
                                        <x-site.svg model="none" path="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-blue-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-slate-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <div class="absolute -top-1 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-blue-400">
                                        <x-site.svg model="none" path="M12 4v16m8-8H4" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-red-400">
                                        <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-orange-400">
                                        <x-site.svg model="none" path="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <div class="absolute -top-1 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-blue-400">
                                        <x-site.svg model="none" path="M12 4v16m8-8H4" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-red-400">
                                        <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </div>
                                    <div class="dark:bg-slate-600 bg-slate-200 shadow-xl w-max p-1 rounded-full cursor-pointer text-orange-400">
                                        <x-site.svg model="none" path="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends section -->
                    </div>
                </div>
                <div id="messages-chat-panel">
                    <p class="text-sm font-bold mb-2 dark:text-white">Messages</p>
                    <div class="overflow-x-hidden overflow-y-auto max-h-[330px]">
                        <!-- messages -->
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-slate-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-green-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-red-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-blue-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-slate-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center cursor-pointer hover:bg-blue-400/30 p-1 py-2 rounded-md">
                            <div class="profile relative min-w-max">
                                <div class="rounded-full bg-orange-400 p-6">
                                    <!-- image -->
                                </div>
                                <span class="absolute rounded-full p-1.5 bg-green-400 bottom-0 right-0 border border-white"></span>
                            </div>
                            <div class="m-2 pr-2 relative min-w-ful w-full">
                                <p class="text-[16px] font-[400]">User Name</p>
                                <p class="text-sm font-light">Last Message</p>
                                <div class="absolute -top-2 right-0">
                                    <span class="text-xs font-light">12:00</span>
                                </div>
                            </div>
                        </div>
                        <!-- ends section -->
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-9/12 sm:p-3">
            <div class="relative dark:bg-slate-600 bg-slate-200 rounded-b-md rounded-t-md">
                <div class="menu_chat_view absolute z-40 flex items-center justify-between bg-slate-500 text-white dark:bg-slate-700 w-full p-2 rounded-t-md">
                    <div class="flex items-center gap-2">
                        <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                            <x-site.svg model="none" path="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </span>
                        <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                            <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </span>
                        <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                            <x-site.svg model="none" path="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                        </span>
                        <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                            <x-site.svg model="none" path="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="rounded-full bg-blue-400 p-4">
                            <!-- image -->
                        </div>
                        <div class="lg:flex flex-col mr-2 hidden">
                            <p class="text-sm font-[400]">User Name</p>
                            <p class="text-xs font-light">Email@email.com</p>
                        </div>
                    </div>
                </div>
                <!-- messages section -->
                <div class="overflow-x-hidden overflow-y-auto h-96 pt-16 px-3" id="viewBoxMessage">
                    <!-- my messages -->
                    <div class="w-full flex items-center justify-start">

                        <div class="flex items-end mb-7">
                            <div class="rounded-full bg-green-400 p-3">
                                <!-- image -->
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="flex flex-col items-start">
                                <div class="max-w-4/6 sm:w-min sm:min-w-[500px] p-2 px-3 bg-slate-400 dark:bg-slate-500 font-light text-white rounded-md m-2">
                                    <p class="text-sm break-words">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores maxime officiis vitae labore, laboriosam ea omnis voluptatibus maiores porro impedit nesciunt corporis blanditiis ipsam et expedita unde, eius provident?
                                    </p>
                                </div>
                                <span class="text-sm font-light ml-3">Just now</span>
                            </div>

                            <div class="items-center justify-end sm:flex hidden">
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </span>
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- friend messages -->
                    <div class="w-full flex justify-end items-stretch">
                        <div class="flex items-center">
                            <div class="items-center justify-end sm:flex hidden">
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </span>
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </span>
                            </div>

                            <div class="flex flex-col items-end">
                                <div class="max-w-4/6 sm:w-min sm:min-w-[500px] p-2 px-3 bg-slate-400 dark:bg-slate-500 font-light text-white rounded-md m-2">
                                    <p class="text-sm break-words">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores maxime officiis vitae labore, laboriosam ea omnis voluptatibus maiores porro impedit nesciunt corporis blanditiis ipsam et expedita unde, eius provident?
                                    </p>
                                </div>
                                <span class="text-sm font-light mr-3">Just now</span>
                            </div>
                        </div>

                        <div class="flex items-end mb-7">
                            <div class="rounded-full bg-blue-400 p-3">
                                <!-- image -->
                            </div>
                        </div>
                    </div>

                    <!-- my messages -->
                    <div class="w-full flex items-center justify-start">

                        <div class="flex items-end mb-7">
                            <div class="rounded-full bg-green-400 p-3">
                                <!-- image -->
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="flex flex-col items-start">
                                <div class="max-w-4/6 sm:w-min sm:min-w-[500px] p-2 px-3 bg-slate-400 dark:bg-slate-500 font-light text-white rounded-md m-2">
                                    <p class="text-sm break-words">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores maxime officiis vitae labore, laboriosam ea omnis voluptatibus maiores porro impedit nesciunt corporis blanditiis ipsam et expedita unde, eius provident?
                                    </p>
                                </div>
                                <span class="text-sm font-light ml-3">Just now</span>
                            </div>

                            <div class="items-center justify-end sm:flex hidden">
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </span>
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- friend messages -->
                    <div class="w-full flex justify-end items-stretch">
                        <div class="flex items-center">
                            <div class="items-center justify-end sm:flex hidden">
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </span>
                                <span class="p-1 rounde-full hover:bg-slate-200 dark:hover:bg-slate-500 rounded-md cursor-pointer">
                                    <x-site.svg model="none" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </span>
                            </div>

                            <div class="flex flex-col items-end">
                                <div class="max-w-4/6 sm:w-min sm:min-w-[500px] p-2 px-3 bg-slate-400 dark:bg-slate-500 font-light text-white rounded-md m-2">
                                    <p class="text-sm break-words">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores maxime officiis vitae labore, laboriosam ea omnis voluptatibus maiores porro impedit nesciunt corporis blanditiis ipsam et expedita unde, eius provident?
                                    </p>
                                </div>
                                <span class="text-sm font-light mr-3">Just now</span>
                            </div>
                        </div>

                        <div class="flex items-end mb-7">
                            <div class="rounded-full bg-blue-400 p-3">
                                <!-- image -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends section -->
                <div class="enter_message_view p-2 w-full dark:bg-slate-600 rounded-md">
                    <div class="rounded-md bg-slate-300 dark:bg-slate-500 flex flex-col p-3 drop-shadow-md" >
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold tracking-wider dark:text-white border-slate-600 dark:border-white border-b-2 cursor-pointer">REPLY</span>
                                <span class="text-sm font-bold tracking-wider dark:text-white cursor-pointer">NOTE</span>
                            </div>
                            <span class="m-1 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-area h-9 w-fulll py-3">
                            <span class="dark:text-slate-300 font-light text-sm">Enter text</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <x-site.button fill="none" class="w-max bg-green-500 text-white rounded-md px-3" value="Send" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('js')
<script>
    $('[data-chat-panel]').find('a').on('click', function() {
        $(this).addClass('shadow-xl bg-white dark:bg-slate-700').siblings().removeClass('shadow-xl bg-white dark:bg-slate-700');
        $('#cotainer_panel_menu').find('#' + $(this).data('chat-content') + '-chat-panel').removeClass('hidden').siblings().addClass('hidden');
    });
    $('[data-chat-panel-mobile]').find('a').on('click', function() {
        $(this).addClass('shadow-xl bg-white dark:bg-slate-700').siblings().removeClass('shadow-xl bg-white dark:bg-slate-700');
        $('#cotainer_panel_menu_mobile').find('#' + $(this).data('chat-content') + '-chat-panel-mobile').removeClass('hidden').siblings().addClass('hidden');
    });
    var scroll = document.getElementById('viewBoxMessage');

    var scrollBottom = scroll.scrollHeight;
    scroll.scrollTo(0, scrollBottom);
</script>
@endsection
