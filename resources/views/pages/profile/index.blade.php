@extends('layouts.app')
@section('title', 'Update Profille')
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 my-5" clase="hover:text-slate-400 dark:hover:text-white" value="Home" location="{{route('dashboard')}}">
        <x-site.breadcrumb-item model="disabled-center" clase="text-slate-600" value="Profile" />
        <x-site.breadcrumb-item model="enabled-end" clase="hover:text-slate-400 dark:hover:text-white" value="Edit" location="{{route('profile.edit')}}" />
    </x-site.breadcrumb>

    <div class="profle_header w-full rounded drop-shadow-2xl mb-5 z-40">
        <!-- photo and cover -->
        <div class="h-52 rounded-t-md bg-responsive-bottom drop-shadow-lg overflow-hidden" style="background-image: url('{{asset('img/profile/cover/'.$pf->cover)}}')">
            <div class="flex flex-col items-center justify-center h-full text-white tracking-wider">
                <img class="rounded-md drop-shadow-lg" src="{{asset('img/profile/avatar/'.$pf->avatar)}}" width="100" height="100" alt="Profile Photo - PushCode Profile">
                <h1 class="ml-2 font-bold text-[17px] md:text-[20px] mt-2">{{Str::limit(auth()->user()->name, 18, '.')}}</h1>
                <p class="ml-2 uppercase text-[15px]">{{auth()->user()->role}}</p>
            </div>
        </div>
        <!-- menu items-->
        <div class="bg-white/50 dark:bg-slate-700 rounded-b-md shadow-lg content-transition">
            <ul class="flex items-center justify-center gap-2 dark:text-gray-200 text-slate-500 mr-2 overflow-x-auto hidenXscrollbar" data-aria-tab="true">
                <li class="px-2 cursor-pointer" data-tab-content="profile_content" id="profile" tab-active="true">
                   <x-site.url model="icon-left" value="Profile" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                   </x-site.url>
                </li>
                <li class="px-2 cursor-pointer" data-tab-content="followers_content" id="followers">
                   <x-site.url model="icon-left" value="Followers" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                   </x-site.url>
                </li>
                <li class="sm:flex hidden px-2 cursor-pointer" data-tab-content="friends_content" id="friends">
                   <x-site.url model="icon-left" value="Friends" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                   </x-site.url>
                </li>
                <li class="sm:flex hidden px-2 cursor-pointer sm:mr-0 mr-5" data-tab-content="gallery_content" id="gallery">
                   <x-site.url model="icon-left" value="Gallery" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                   </x-site.url>
                </li>
                <li class="flex sm:hidden" data-tab-dropdown="">
                    <x-site.url id="tab_toggle_btn_profile" model="default" class="p-2 rounded-md cursor-pointer" data-dropdown-toggle="tabs_menu_profile" data-tab-write="followers">
                        <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </x-site.url>
                </li>
            </ul>
        </div>
    </div>

    <x-site.dropdown id="tabs_menu_profile" type="default" class="p-1">
        <li data-tab-content="followers_content" id="followers_dropdown" class="hidden">
            <x-site.url model="icon-left" value="Followers" class="items-center p-2 cursor-pointer">
               <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </x-site.url>
         </li>
         <li data-tab-content="friends_content" id="friends_dropdown">
            <x-site.url model="icon-left" value="Friends" class="items-center p-2 cursor-pointer">
               <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </x-site.url>
         </li>
        <li data-tab-content="gallery_content" id="gallery_dropdown">
            <x-site.url model="icon-left" value="Gallery" class="items-center p-2 cursor-pointer">
                <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
             </x-site.url>
        </li>
    </x-site.dropdown>

    <div class="profile_cotainer md:px-0 lg:px-10" >
        <div id="profile_content" class="hidden">
            <div class="flex sm:flex-row flex-col gap-2 sm:gap-4">
                <div class="h-max min-w-auto max-w-full sm:max-w-xs w-full sm:w-[270px]">
                    <div class="dark:bg-slate-700/95 bg-white rounded-md dark:shadow-none stripe-shadow drop-shadow-2xl p-5 text-slate-600 dark:text-slate-300 mb-5">
                        <div class="flex flex-col font-light tracking-wide text-sm">
                            <h4 class="text-[19px] mb-2 font-bold dark:text-slate-100/90">Details</h4>
                            <p class="break-all">@if($pf_details->about){{$pf_details->about}}@else Not records found @endif</p>
                            <h4 class="text-[19px] mb-2 font-bold dark:text-slate-100/90 my-2">Information</h4>
                            <div class="flex items-center mb-1">
                                <x-site.svg model="none-2" class="mr-2 min-w-max w-4 h-4 text-red-400" path="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" path2="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                <p class="text-sm break-all">
                                    @if($pf_address->address || $pf_address->city || $pf_address->state || $pf_address->zip || $pf_address->country)
                                        {{ $pf_address->address }}<br>
                                        {{ $pf_address->city }}, {{ $pf_address->state }} {{ $pf_address->zip }}, {{ $pf_address->country }}
                                    @else
                                        Not records found
                                    @endif
                                </p>
                            </div>
                            <div class="flex items-center mb-1">
                                <x-site.svg model="none" class="text-orange-400 dark:text-orange-300 mr-2 w-4 h-4" path="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                <span class="text-sm break-all">{{auth()->user()->email}}</span>
                            </div>
                            <div class="flex items-center mb-1">
                                <x-site.svg model="none" class="text-purple-400 dark:text-purple-300 mr-2 w-4 h-4" path="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                <span class="text-sm break-all">
                                    @if($pf_details->phone)
                                        {{ $pf_details->phone }}
                                    @else
                                        Not records found
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="dark:bg-slate-700/95 bg-white rounded-md dark:shadow-none stripe-shadow drop-shadow-2xl p-5 text-slate-600 dark:text-slate-300 mb-5">
                        <div class="flex flex-col font-light tracking-wide text-sm">
                            <h4 class="text-[19px] mb-2 font-bold dark:text-slate-100/90">Social Media</h4>
                            <div class="flex items-center my-1 text-slate-500">
                                <img class="mr-2 break-all min-w-max w-5 h-5" src="{{asset('svg/icon/logo-facebook.svg')}}" width="20" height="20" alt="logo fabeeok - push code"/>
                                <p class="break-all">
                                    @if($pf_social->facebook)
                                        {{ $pf_social->facebook }}
                                    @else
                                        Not records found
                                    @endif
                                </p>
                            </div>
                            <div class="flex items-center my-1 text-slate-500">
                                <img class="mr-2 break-all min-w-max w-5 h-5" src="{{asset('svg/icon/logo-twitter.svg')}}" width="20" height="20" alt="logo twitter - push code"/>
                                <p class="break-all">
                                    @if($pf_social->twitter)
                                        {{ $pf_social->twitter }}
                                    @else
                                        Not records found
                                    @endif
                                </p>
                            </div>
                            <div class="flex items-center my-1 text-slate-500">
                                <img class="mr-2 break-all min-w-max w-5 h-5" src="{{asset('svg/icon/logo-instagram.svg')}}" width="20" height="20" alt="logo instagram - push code"/>
                                <p class="break-all">
                                    @if($pf_social->instagram)
                                        {{ $pf_social->instagram }}
                                    @else
                                        Not records found
                                    @endif
                                </p>
                            </div>
                            <div class="flex items-center my-1 text-slate-500">
                                <img class="mr-2 break-all min-w-max w-5 h-5" src="{{asset('svg/icon/logo-github.svg')}}" width="20" height="20" alt="logo github - push code"/>
                                <p class="break-all">
                                    @if($pf_social->github)
                                        {{ $pf_social->github }}
                                    @else
                                        Not records found
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="rounded dark:bg-slate-700 shadow drop-shadow-2xl bg-white p-3">
                        <form>
                           <x-site.input model="area" name="post" class="w-full h-20 mb-2 dark:border-slate-500 border-slate-300/90 rounded-[3px] hover:-translate-y-1 transition-all duration-500" placeholder="Share what you want!" style="resize: none" />
                           <div class="flex justify-between">
                              <label for="post_imagen" class="flex items-center w-max px-2 py-1 rounded-[3px] text-slate-600 border border-slate-300/90 dark:bg-slate-600 dark:text-white dark:border-slate-500 cursor-pointer hover:-translate-y-1 transition-all duration-500">
                                 <x-site.svg model="none-2" path="" class="mr-1 text-slate-300" path="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" path2="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                 <span class="text-sm font-light">Add photo</span>
                                 <input type="file" class="hidden" name="post_imagen" id="post_imagen" />
                              </label>
                              <x-site.button fill="none" value="Post" class="rounded-[3px] px-8 bg-[#4965ab] text-white my-0 hover:-translate-y-1 transition-all duration-500 max-w-max" />
                           </div>
                        </form>
                    </div>
                    <!-- LAST POST -->
                    <div class="dark:bg-slate-700 w-full rounded-[3px] mt-3 shadow drop-shadow-2xl bg-white">
                        <!-- Header -->
                        <div class="flex items-center justify-between p-2">
                        <div class="flex items-center dark:text-slate-200 text-slate-500">
                            <img class="rounded-full" src="{{asset('img/profile/avatar/'.$pf->avatar)}}" width="35" height="35" alt="avatar post">
                            <span class="text-[19px] ml-1 capitalize">{{auth()->user()->name}}</span>
                        </div>
                        <div class="flex items-center text-slate-400">
                            <span class="text-sm font-light mr-2">2 hours</span>
                            <x-site.svg class="cursor-pointer" model="none" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </div>
                        </div>
                        <!-- Body -->
                        <div class="w-full">
                        <div class="h-[400px] max-h-[400px] bg-cover bg-bottom" style="background-image: url('{{asset('img/profile/cover/default.jpg')}}')"></div>
                        </div>
                        <!-- Footer -->
                        <div class="max-h-[50px] h-[50px] w-full flex items-center justify-between">
                        <ul class="flex items-center justify-end gap-2">
                            <li class="flex items-center text-sm font-light dark:text-white text-slate-600 ml-2">
                                <x-site.url model="default" class="hover:bg-slate-200 dark:hover:bg-slate-400 px-1 sm:px-2 py-1 rounded cursor-pointer">
                                    <x-site.svg model="none" class="w-4 h-4 mr-1 sm:mr-2" path="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    <span>Like</span>
                                </x-site.url>
                            </li>
                            <li class="flex items-center text-sm font-light dark:text-white text-slate-600">
                                <x-site.url model="default" class="hover:bg-slate-200 dark:hover:bg-slate-400 px-1 sm:px-2 py-1 rounded cursor-pointer">
                                    <x-site.svg model="none" class="w-4 h-4 mr-1 sm:mr-2" path="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    <span>Comment</span>
                                </x-site.url>
                            </li>
                            <li class="flex items-center text-sm font-light dark:text-white text-slate-600">
                                <x-site.url model="default" class="hover:bg-slate-200 dark:hover:bg-slate-400 px-1 sm:px-2 py-1 rounded cursor-pointer">
                                    <x-site.svg model="none" class="w-4 h-4 mr-1 sm:mr-2" path="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    <span>Shared</span>
                                </x-site.url>
                            </li>
                        </ul>
                        <p class="text-sm font-light dark:text-white text-slate-500 mr-2 sm:flex hidden"><span class="mr-1"> 0 </span> Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="followers_content" class="hidden">
            <div class="w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center">
                <p class="text-sm text-light mb-2">
                   We are working hard to finish these sections, for your patience thank you very much.
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                   <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                </svg>
             </div>
        </div>
        <div id="friends_content" class="hidden">
            <div class="w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center">
                <p class="text-sm text-light mb-2">
                We are working hard to finish these sections, for your patience thank you very much.
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                </svg>
            </div>
        </div>
        <div id="gallery_content" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <div class="h-max w-full drop-shadow-2xl rounded-md dark:bg-slate-700 bg-white">
                    <div class="rouded-t-md flex justify-between p-1 px-3">
                        <span></span>
                        <x-site.url model="default" class="cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-600 p-1 rounded-md">
                            <x-site.svg model="none" class="w-4 h-4 text-slate-600 dark:text-slate-400" path="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </x-site.url>
                    </div>
                    <div class="bg-slate-100 dark:bg-slate-600/50 w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center text-center">
                        <p class="text-sm text-light mb-2">
                        We are working hard to finish these sections, for your patience thank you very much. Gallery
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                </div>
                <div class="h-max w-full drop-shadow-2xl rounded-md dark:bg-slate-700 bg-white">
                    <div class="rouded-t-md flex justify-between p-1 px-3">
                        <span></span>
                        <x-site.url model="default" class="cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-600 p-1 rounded-md">
                            <x-site.svg model="none" class="w-4 h-4 text-slate-600 dark:text-slate-400" path="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </x-site.url>
                    </div>
                    <div class="bg-slate-100 dark:bg-slate-600/50 w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center text-center">
                        <p class="text-sm text-light mb-2">
                        We are working hard to finish these sections, for your patience thank you very much. Gallery
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                </div>
                <div class="h-max w-full drop-shadow-2xl rounded-md dark:bg-slate-700 bg-white">
                    <div class="rouded-t-md flex justify-between p-1 px-3">
                        <span></span>
                        <x-site.url model="default" class="cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-600 p-1 rounded-md">
                            <x-site.svg model="none" class="w-4 h-4 text-slate-600 dark:text-slate-400" path="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </x-site.url>
                    </div>
                    <div class="bg-slate-100 dark:bg-slate-600/50 w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center text-center">
                        <p class="text-sm text-light mb-2">
                        We are working hard to finish these sections, for your patience thank you very much. Gallery
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                </div>
                <div class="h-max w-full drop-shadow-2xl rounded-md dark:bg-slate-700 bg-white">
                    <div class="rouded-t-md flex justify-between p-1 px-3">
                        <span></span>
                        <x-site.url model="default" class="cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-600 p-1 rounded-md">
                            <x-site.svg model="none" class="w-4 h-4 text-slate-600 dark:text-slate-400" path="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </x-site.url>
                    </div>
                    <div class="bg-slate-100 dark:bg-slate-600/50 w-full p-3 text-slate-600 dark:text-slate-400 flex flex-col items-center text-center">
                        <p class="text-sm text-light mb-2">
                        We are working hard to finish these sections, for your patience thank you very much. Gallery
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/components/tabs.js')}}"></script>
@endsection
