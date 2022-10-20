@extends('layouts.app')
@section('title', 'Profille')
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 my-5" clase="hover:text-slate-400 dark:hover:text-white" value="Home" location="{{route('dashboard')}}">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-slate-400 dark:hover:text-white" value="Profile" location="{{route('profile')}}"/>
        <x-site.breadcrumb-item model="disabled" clase="text-slate-600" value="Edit" />
    </x-site.breadcrumb>

    <div class="profle_header w-full rounded drop-shadow-2xl mb-5">
        <!-- photo and cover -->
        <div class="h-52 rounded-t-md bg-responsive-bottom drop-shadow-lg overflow-hidden" style="background-image: url('{{asset('img/profile/cover/'.$pfs->cover)}}')">
            <div class="relative flex flex-col items-center justify-center h-full text-white tracking-wider">
                <x-site.url model="default" class="absolute right-2 top-2 hover:bg-slate-700 rounded text-white cursor-pointer p-1" data-modal-content="cover_profile_form" data-open-modal="profile_modal">
                    <x-site.svg model="none" path="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                 </x-site.url>
                 <div class="rounded-md border-2 border-dashed p-1 content_hover relative content_hovers" data-modal-content="avatar_profile_form" data-open-modal="profile_modal">
                    <img src="{{asset('img/profile/avatar/'.$pfs->avatar)}}" class="rounded-md w-24 h-24" alt="profile avatar">
                    <span class="content_opacitys opacity-0 absolute inset-0 w-full h-full rounded-md overflow-hidden cursor-pointer transition-all duration-500">
                       <div class="w-full h-full flex items-center justify-center text-white bg-gradient-to-r from-cyan-500/50 to-blue-500/50">
                          <span>+</span>
                       </div>
                    </span>
                </div>
            </div>
        </div>
        <!-- menu items-->
        <div class="bg-white/50 dark:bg-slate-700 rounded-b-md shadow-lg content-transition">
            <ul class="flex items-center justify-center gap-2 dark:text-gray-200 text-slate-500 mr-2 overflow-x-auto hidenXscrollbar" data-aria-tab="true">
                <li class="px-2 cursor-pointer" data-tab-content="General_content" id="General" tab-active="true">
                    <x-site.url model="icon-left" value="General" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </x-site.url>
                </li>
                <li class="px-2 cursor-pointer" data-tab-content="Social_content" id="SocialLink">
                    <x-site.url model="icon-left" value="Social Media" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </x-site.url>
                </li>
                <li class="sm:flex hidden px-2 cursor-pointer" data-tab-content="Notify_content" id="Notify">
                   <x-site.url model="icon-left" value="Notifitcation" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                   </x-site.url>
                </li>
                <li class="sm:flex hidden px-2 cursor-pointer sm:mr-0 mr-5" data-tab-content="ChanguePsw_content" id="ChanguePassword">
                   <x-site.url model="icon-left" value="Changue Password" class="items-center my-2.5">
                      <x-site.svg model="none" class="mr-1 w-4 h-4" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                   </x-site.url>
                </li>
                <li class="flex sm:hidden" data-tab-dropdown="">
                    <x-site.url id="tab_toggle_btn_profile" model="default" class="p-2 rounded-md cursor-pointer" data-dropdown-toggle="tabs_menu_profile" data-tab-write="SocialLink">
                        <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </x-site.url>
                </li>
            </ul>
        </div>
    </div>

    <x-site.dropdown id="tabs_menu_profile" type="default" class="p-1 z-50">
        <li data-tab-content="Social_content" id="SocialLink_2" class="hidden">
            <x-site.url model="icon-left" value="Social Media" class="items-center p-2 cursor-pointer">
               <x-site.svg model="none" class="mr-1 w-4 h-4" path="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
            </x-site.url>
         </li>
         <li data-tab-content="Notify_content" id="Notify_2">
            <x-site.url model="icon-left" value="Notificactions" class="items-center p-2 cursor-pointer">
               <x-site.svg model="none" class="mr-1 w-4 h-4" path="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </x-site.url>
         </li>
        <li data-tab-content="ChanguePsw_content" id="ChanguePassword_2">
            <x-site.url model="icon-left" value="Changue Password" class="items-center p-2 cursor-pointer">
                <x-site.svg model="none" class="mr-1 w-4 h-4" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
             </x-site.url>
        </li>
    </x-site.dropdown>

    <div class="profile_cotainer md:px-0 lg:px-10 mb-5">
        <div id="General_content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                <div class="p-3 px-2 sm:px-4 rounded bg-white dark:bg-slate-700 drop-shadow-2xl overflow-hidden h-max">
                    <form action="/profile/update" method="post" class="flex flex-col">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="User Name" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="name" type="text" value="{{ old('name') != '' ? old('name') : auth()->user()->name }}" />
                            </div>
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="Email" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="email" type="email" value="{{ old('email') != '' ? old('email') : auth()->user()->email }}" />
                             </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="Phone" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="phone" type="number" value="{{ old('phone') != '' ? old('phone') : $pfs->phone}}" />
                            </div>
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="Birthday" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="birthday" type="date" value="{{ old('birthday') != '' ? old('birthday') : $pfs->birthday}}"/>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="City" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="city" type="text" value="{{ old('city') != '' ? old('city') : $pfs->city}}" />
                            </div>
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="State" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="state" type="text" value="{{ old('state') != '' ? old('state') : $pfs->state}}" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="Country" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="country" type="text" value="{{ old('country') != '' ? old('country') : $pfs->country}}" />
                            </div>
                            <div class="flex flex-col">
                                <x-site.label class="font-light tracking-wide my-1" value="Address" />
                                <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="address" type="text" value="{{ old('address') != '' ? old('address') : $pfs->address}}" />
                            </div>
                        </div>
                        <x-site.label class="font-light tracking-wide my-1" value="Zip" />
                        <x-site.input model="default" class="border-slate-200 dark:border-slate-500" name="zip" type="number" value="{{ old('zip') != '' ? old('zip') : $pfs->zip}}" />
                        <x-site.label class="font-light tracking-wide my-1" value="Bio" />
                        <x-site.input model="area" class="border-slate-200 dark:border-slate-500" name="bio">{{ old('bio') != '' ? old('bio') : $pfs->about}}</x-site.input>
                        <x-site.button fill="none" class="mt-5 shadow w-full bg-[#4965ab] text-slate hover:-translate-y-1 transition-all duration-500" value="Save Profile" />
                    </form>
                </div>
                <div class="p-3 px-2 sm:px-4 rounded bg-white dark:bg-slate-700 drop-shadow-2xl overflow-hidden h-max">
                    <form action="/profile/update" method="post">
                        @csrf
                        {{method_field('PATCH')}}
                        <table>
                           <thead class="border-b border-dashed dark:border-slate-600">
                              <tr>
                                 <th scope="col"></th>
                                 <th scope="colgroup" colspan="2" class="min-w-max w-max text-[14px] sm:text-sm font-[400] tracking-wide text-slate-700 dark:text-white">Profile Privacy</th>
                              </tr>
                              <tr>
                                 <th class="text-[14px] sm:text-sm font-[400] tracking-wide w-full text-start text-slate-700 dark:text-white pb-2">Set privacy</th>
                                 <th class="min-w-max w-max">
                                    <div class="flex items-center w-max text-slate-700 dark:text-white pb-2">
                                       <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                       <span class="mr-1 text-[14px] sm:text-sm font-[400] tracking-wide">Friends</span>
                                    </div>
                                 </th>
                                 <th class="min-w-max w-max">
                                    <div class="flex items-center w-max text-slate-700 dark:text-white pb-2">
                                       <x-site.svg model="none" class="mr-1 w-4 h-4" path="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                       <span class="mr-1 text-[14px] sm:text-sm font-[400] tracking-wide">Private</span>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody class="text-[14px] sm:text-sm font-light text-slate-500 dark:text-slate-400">
                              <tr class="border-b border-dashed dark:border-slate-600">
                                 <td class="py-2">
                                    Your posts
                                 </td>
                                 <td class="py-2">
                                    <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="posts" {{$pfs->post_is_public == true ? 'checked' : '';}}>
                                 </td>
                                 <td class="py-2">
                                    <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="posts" {{$pfs->post_is_public == false ? 'checked' : '';}}>
                                 </td>
                              </tr>
                              <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                   Email
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="email" {{$pfs->email_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="email" {{$pfs->email_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                   Address
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="address" {{$pfs->address_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="address" {{$pfs->address_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                   Your Photos
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="photos" {{$pfs->gallery_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="photos" {{$pfs->gallery_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                   Your Friends
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="friends" {{$pfs->friends_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="friends" {{$pfs->friends_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    People You Follow
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="follow" {{$pfs->follow_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="follow" {{$pfs->follow_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    People Who Follow You
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="followers" {{$pfs->followers_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="followers" {{$pfs->followers_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Social Media
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="social" {{$pfs->social_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="social" {{$pfs->social_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Birthday
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="birthday" {{$pfs->birthday_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="birthday" {{$pfs->birthday_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                             <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Phone
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="phone" {{$pfs->phone_is_public == true ? 'checked' : '';}}>
                                </td>
                                <td class="py-2">
                                   <input class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500" type="checkbox" name="phone" {{$pfs->phone_is_public == false ? 'checked' : '';}}>
                                </td>
                             </tr>
                           </tbody>
                        </table>
                        <x-site.button fill="none" class="mt-5 shadow w-full bg-[#4965ab] text-slate hover:-translate-y-1 transition-all duration-500" value="Save Privacy" />
                    </form>
                </div>
            </div>
        </div>
        <div id="Notify_content" class="hidden">
            <div class="flex md:flex-row flex-col gap-4">
                <div class="w-full md:w-3/6 p-3 px-2 sm:px-4 rounded bg-white dark:bg-slate-700 drop-shadow-2xl overflow-hidden">
                   <form action="/profile/update" method="post">
                      @csrf
                      {{method_field('PATCH')}}
                      <table>
                         <thead class="border-b border-dashed dark:border-slate-600">
                            <tr>
                               <th scope="col"></th>
                               <th scope="colgroup" colspan="2" class="min-w-max w-max text-[14px] sm:text-sm font-[400] tracking-wide text-slate-700 dark:text-white">Warning style</th>
                            </tr>
                            <tr>
                               <th class="text-[14px] sm:text-sm font-[400] tracking-wide w-full text-start text-slate-700 dark:text-white pb-2">Send notifications about</th>
                               <th class="min-w-max w-max">
                                  <div class="flex items-center w-max text-slate-700 dark:text-white pb-2">
                                     <x-site.svg model="none" class="mr-1 w-4 h-4" path="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                     <span class="mr-1 text-[14px] sm:text-sm font-[400] tracking-wide">Email</span>
                                  </div>
                               </th>
                               <th class="min-w-max w-max">
                                  <div class="flex items-center w-max text-slate-700 dark:text-white pb-2">
                                     <x-site.svg model="none" class="mr-1 w-4 h-4" path="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                     <span class="mr-1 text-[14px] sm:text-sm font-[400] tracking-wide">Mobile</span>
                                  </div>
                               </th>
                            </tr>
                         </thead>
                         <tbody class="text-[14px] sm:text-sm font-light text-slate-500 dark:text-slate-400">
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Comments on your posts
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="comment_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="comment_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    New followers
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="follow_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="follow_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Chat messages
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="chat_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="chat_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Start of session
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="session_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="session_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Completed tasks
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="completed_task_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="completed_task_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Overdue tasks
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="overdure_task_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="overdure_task_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Tasks of the day
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="task_day_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="task_day_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Assigned jobs
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="asigned_job_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="asigned_job_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Contributors modifying a project
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="contributors_edit_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="contributors_edit_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Contributors deleting a project
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="contributors_deleted_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="contributors_deleted_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    News
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="news_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="news_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Site updates
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="updates_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="updates_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                            <tr class="border-b border-dashed dark:border-slate-600">
                                <td class="py-2">
                                    Announcements
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="announcements_email" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                                <td class="py-2">
                                    <input type="checkbox" name="announcements_mobile" class="mx-auto block rounded focus:ring-0 border-slate-200 dark:border-slate-500">
                                </td>
                            </tr>
                         </tbody>
                      </table>
                      <x-site.button fill="none" class="mt-5 shadow w-full bg-[#4965ab] text-slate hover:-translate-y-1 transition-all duration-500" value="Save Changues" />
                   </form>
                </div>
                <div class="md:flex hidden items-center justify-center md:w-3/6">
                   <img width="450" height="450"src="{{asset('img/ilustraciones/phone_view.png')}}" alt="social media phone_view">
                </div>
            </div>
        </div>
        <div id="Social_content" class="hidden">
            <div class="flex md:flex-row flex-col gap-4">
                <div class="w-full md:w-5/12 p-3 rounded bg-white dark:bg-slate-700 drop-shadow-2xl">
                   <form action="/profile/update" method="post">
                      @csrf
                      {{method_field('PATCH')}}
                      <x-site.label type="label" class="mt-0 text-sm font-light" value="Faccebook" />
                      <div class="w-full relative">
                         <img class="absolute top-3 sm:top-3 left-2 w-4 h-4" src="{{asset('svg/icon/logo-facebook.svg')}}"  alt="social medias facebook">
                         <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="facebook" type="text" value="{{ (old('facebook') != '') ? old('facebook') : $pfs->facebook}}" />
                      </div>
                      <x-site.label type="label" class="mt-0 text-sm font-light" value="Instagram" />
                      <div class="w-full relative">
                         <img class="absolute top-3 sm:top-3 left-2 w-4 h-4" src="{{asset('svg/icon/logo-instagram.svg')}}"  alt="social medias facebook">
                         <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="instagram" type="text" value="{{ (old('instagram') != '') ? old('instagram') : $pfs->instagram}}" />
                      </div>
                      <x-site.label type="label" class="mt-0 text-sm font-light" value="Twiiter" />
                      <div class="w-full relative">
                         <img class="absolute top-3 sm:top-3 left-2 w-4 h-4" src="{{asset('svg/icon/logo-twitter.svg')}}"  alt="social medias facebook">
                         <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="twitter" type="text" value="{{ (old('twitter') != '') ? old('twitter') : $pfs->twitter}}" />
                      </div>
                      <x-site.label type="label" class="mt-0 text-sm font-light" value="Github" />
                      <div class="w-full relative">
                         <img class="absolute top-3 sm:top-3 left-2 w-4 h-4" src="{{asset('svg/icon/logo-github.svg')}}"  alt="social medias facebook">
                         <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="github" type="text" value="{{ (old('github') != '') ? old('github') : $pfs->github}}" />
                      </div>
                      <x-site.button fill="none" class="mt-5 shadow w-full bg-[#4965ab] text-slate hover:-translate-y-1 transition-all duration-500" value="Change Password" />
                   </form>
                </div>
                <div class="md:flex hidden items-center justify-center sm:w-5/12">
                   <img width="400" height="400"src="{{asset('img/ilustraciones/phone_view.png')}}" alt="social media phone_view">
                </div>
            </div>
        </div>
        <div id="ChanguePsw_content" class="hidden">
            <div class="flex md:flex-row flex-col p-2 gap-4">
                <div class="w-full md:w-5/12 p-3 rounded bg-white dark:bg-slate-700 drop-shadow-2xl">
                   <form action="/profile/update" method="post">
                      @csrf
                      {{method_field('PATCH')}}
                        <x-site.label class="mt-0 text-sm font-light" value="Old Password" />
                        <div class="w-full relative">
                            <x-site.svg model="none" class="absolute text-slate-500 dark:text-slate-400 top-3 sm:top-2.5 left-2 w-4 h-4" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="current_password" type="password" autocomplete="of" required/>
                        </div>
                        <x-site.label class="mt-0 text-sm font-light" value="New Password" />
                        <div class="w-full relative">
                            <x-site.svg model="none" class="absolute text-slate-500 dark:text-slate-400 top-3 sm:top-2.5 left-2 w-4 h-4" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="new_password" type="password" autocomplete="of"  required/>
                        </div>
                        <x-site.label class="mt-0 text-sm font-light" value="Comfirm New Password" />
                        <div class="w-full relative">
                            <x-site.svg model="none" class="absolute text-slate-500 dark:text-slate-400 top-3 sm:top-2.5 left-2 w-4 h-4" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            <x-site.input model="default" class="w-full border-slate-200 dark:border-slate-500 pl-7" name="new_confirm_password" type="password" autocomplete="of"  required/>
                        </div>
                        <x-site.button fill="none" class="shadow w-full bg-[#4965ab] text-slate hover:-translate-y-1 transition-all duration-500 mt-5" value="Change Password" />
                   </form>
                </div>
                <div class="h-max w-full md:w-6/12 p-3 rounded bg-white dark:bg-slate-700 drop-shadow-2xl">
                    <x-site.label class="mt-0 text-sm font-light" value="Deleted Your Account" />
                    <div class="text-sm font-light border-2 dark:text-red-500 bg-red-200  text-slate-700 border-red-400 p-2 border-dashed rounded">
                        <p>If you want to delete your account you can do it without any problem, all your data will be deleted immediately, so we will not be able to recover any data after that, if you still want to do it, we hope you have success in your life, it was a pleasure to have you here!</p>
                    </div>
                    <x-site.button data-modal-content="profile_deleted" data-open-modal="profile_modal" fill="none" class="shadow w-full hover:-translate-y-1 transition-all duration-500 bg-red-400 text-slate mt-5" value="Deleted Account" />
                </div>
            </div>
        </div>
    </div>

    <div class="fixed md:px-0 px-4 py-10 hidden items-center justify-center inset-0 z-40 bg-black/50" id="profile_modal">
        <div id="profile_modal-target" class="hidden relative max-w-[860px] w-max h-max bg-slate-100 dark:bg-slate-700 p-3 rounded-md overflow-hidden text-slate-600 dark:text-slate-300">
            <form action="/profile/update" method="post" id="avatar_profile_form" enctype="multipart/form-data" class="hidden">
                @csrf
                {{method_field('PATCH')}}
                <div class="m-5 mx-2">
                    <h1 class="text-center font-bold text-md mb-2">Upload Your Avatar</h1>
                    <label for="inpAvatar-file" class="flex flex-col justify-center items-center w-full h-50 rounded-lg border-2 border-dashed cursor-pointer border-gray-300 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-800/50 content-transition">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <x-site.svg class="mb-3 w-10 h-10 text-gray-400" model="none" path="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            <p class="mb-2 sm:text-sm text-[13px] text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-[13px] sm:text-xs text-gray-500 dark:text-gray-400">PNG, JPEG or JPG (MAX. 350x350px)</p>
                        </div>
                        <input id="inpAvatar-file" type="file" name="avatar" class="hidden" data-upload-file="true" data-upload-button="form_avatar_button">
                    </label>
                </div>
                <div class="flex gap-2 w-full sm:min-w-[300px] justify-end items-center">
                   <x-site.url model="default" class="cursor-pointer bg-red-500 rounded-md shadow-lg text-white py-2 px-3" data-close-modal="profile_modal">Cancel</x-site.url>
                   <x-site.button fill="none" type="sumbit" model="default" class="cursor-pointer bg-green-500/20 rounded-md shadow-lg text-white py-2 px-3 max-w-max my-0" id="form_avatar_button" disabled value="Update Photo"/>
                </div>
            </form>
            <form action="/profile/update" method="post" id="cover_profile_form" enctype="multipart/form-data" class="hidden">
                @csrf
                {{method_field('PATCH')}}
                <div class="m-5 mx-2">
                    <h1 class="text-center font-bold text-md mb-2">Upload Your Cover</h1>
                    <label for="inpCover-file" class="flex flex-col justify-center items-center w-full h-50 rounded-lg border-2 border-dashed cursor-pointer border-gray-300 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-800/50 content-transition">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <x-site.svg class="mb-3 w-10 h-10 text-gray-400" model="none" path="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            <p class="mb-2 sm:text-sm text-[13px] text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-[13px] sm:text-xs text-gray-500 dark:text-gray-400">PNG, JPEG or JPG (MAX. 350x350px)</p>
                        </div>
                        <input id="inpCover-file" type="file" name="cover" class="hidden" data-upload-file="true" data-upload-button="form_cover_button">
                    </label>
                </div>
                <div class="flex gap-2 w-full sm:min-w-[300px] justify-end items-center">
                   <x-site.url model="default" class="cursor-pointer bg-red-500 rounded-md shadow-lg text-white py-2 px-3" data-close-modal="profile_modal">Cancel</x-site.url>
                   <x-site.button fill="none" type="sumbit" model="default" class="cursor-pointer bg-green-500/20 rounded-md shadow-lg text-white py-2 px-3 max-w-max my-0" id="form_cover_button" disabled value="Update Photo"/>
                </div>
            </form>
            <form action="{{route('profile.deleted')}}" method="post" id="profile_deleted" class="hidden">
                @csrf
                {{method_field('DELETE')}}
                <div class="m-5 mx-2">
                    <h1 class="text-center font-bold text-md mb-2">Delete Your Account</h1>
                    <p class="text-center text-gray-500 dark:text-gray-400">Are you sure you want to delete your account?</p>
                </div>
                <div class="flex gap-2 w-full sm:min-w-[300px] justify-end items-center">
                   <x-site.url model="default" class="cursor-pointer bg-red-500 rounded-md shadow-lg text-white py-2 px-3" data-close-modal="profile_modal">Cancel</x-site.url>
                   <x-site.button fill="none" type="sumbit" model="default" class="cursor-pointer bg-green-500 rounded-md shadow-lg text-white py-2 px-3 max-w-max" value="Delete Account"/>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/components/tabs.js')}}"></script>
<script type="text/javascript" src="{{asset('js/components/modal.js')}}"></script>
@endsection
