<header class="flex flex-col shadow dark:bg-slate-700">
    <div class="flex items-center justify-between py-2 px-2 sm:px-6">
        <div class="flex items-center">
            <a href="{{url('/')}}">
               <img src="{{asset('img/site/logo.png')}}" width="47" height="47" alt="Push-Code Logo">
            </a>
            <div class="flex flex-col sm:ml-1">
                <span class="font-bold text-[15px] dark:text-slate-200 text-slate-600 -mb-1">Push-Code</span>
                <span class="text-light text-[13px] dark:text-blue-200 text-blue-400">by <span class="text-green-300">AngelSaul27</span></span>
            </div>
        </div>
        <ul class="flex items-center text-slate-500 dark:text-slate-100">
            <li class="mr-2 sm:flex hidden">
                <x-site.url type="button" class="theme-toggle hover:-translate-y-1 cursor-pointer p-1.5 hover:bg-slate-100 dark:hover:text-white dark:hover:bg-slate-600 rounded" model="default">
                    <x-site.svg class="theme-toggle-dark w-4 h-4 hidden" model="fill" path="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                    <x-site.svg class="theme-toggle-light w-4 h-4 hidden" model="fill" path="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
                </x-site.url>
            </li>
            <li class="mr-2 sm:flex hidden">
                <?php $is_readNotify = DB::table('notifies')->where('user_id', auth()->user()->id)->where('is_read',"!=",1)->count();
                    if(($count_Notify = DB::table('notifies')->where('user_id', auth()->user()->id)->count()) > 0 ){
                        $notifies = DB::table('notifies')->where('user_id', auth()->user()->id)->get();
                    }
                ?>
                <x-site.url model="default" data-dropdown-placement="bottom" data-dropdown-toggle="NotifyMenu" class="relative hover:-translate-y-1 cursoor-pointer p-1.5 hover:bg-slate-100 dark:hover:text-white dark:hover:bg-slate-600 cursor-pointer rounded-full">
                    <x-site.svg model="fill"  class="h-4 w-4" path="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    @if($is_readNotify>0)
                        <div id="buble_notification" class="rounded-full bg-red-400 p-1 absolute top-[2px] right-[2px]"></div>
                    @endif
                </x-site.url>
                <!-- dropdown -->
                <x-site.dropdown id="NotifyMenu" type="default" class="w-max drop_mesagge-inset">
                    <div class="w-72 h-60 text-slate-600 dark:text-slate-300 pb-9 overflow-hidden">
                        <div class="flex items-center justify-between h-10 border-b dark:border-slate-600 dark:bg-slate-700 select-none">
                            <p class="p-1 px-2 tracking-wider">Notifications</p>
                            <div class="px-2 cursor-pointer" data-dropdown-placement="left-start" data-dropdown-toggle="SettingsNotificationsTogglet">
                                <x-site.svg model="none" class="w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </div>
                            <x-site.dropdown id="SettingsNotificationsTogglet" type="default">
                                <x-site.url model="icon-left" value="View Notifys" class="dark:hover:bg-slate-600 hover:bg-slate-200 hover:shadow rounded p-1 cursor-pointer">
                                    <x-site.svg model="none" class="mr-1 text-green-500 dark:text-green-300" path="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </x-site.url>
                                <x-site.url model="icon-left" value="Mark all as seen" class="dark:hover:bg-slate-600 hover:bg-slate-200 hover:shadow rounded p-1 cursor-pointer">
                                    <x-site.svg model="none" class="mr-1 text-blue-500 dark:text-blue-300" path="M5 13l4 4L19 7"/>
                                </x-site.url>
                            </x-site.dropdown>
                        </div>
                        <div class="p-2 w-full h-full overflow-y-auto overflow-x-hidden body_togglet_notify">
                            @if($count_Notify > 0)
                                @foreach($notifies as $notify)
                                    <div class="relative py-2 w-full rounded hover:bg-slate-100 dark:hover:bg-slate-600/50 transition-all duration-300 select-none content_hovers items_notify_{{$notify->id}}">
                                        <a href="{{route(''.$notify->location.'')}}" class="flex items-center w-full h-full">
                                            <img src="{{asset('img/site/logo.png')}}" class="min-w-max min-h-max w-10 h-10" alt="logo notifies" width="30" height="30" />
                                            <div class="flex flex-col ml-1 mr-5">
                                                <div class="tracking-wide font-[500]">{!!$notify->name!!}</div>
                                                <div class="text-xs font-[300] tracking-wider">{!!$notify->description!!}</div>
                                                <span class="text-[11px]">
                                                    <?php
                                                        $DateNotf = $notify->created_at; $NowDiff = now(); $Diff = $NowDiff->diff($DateNotf);
                                                        if($Diff->d > 0){ echo $Diff->d . ' days ago'; } elseif($Diff->h > 0){ echo $Diff->h . ' hours ago'; } elseif($Diff->i > 0){ echo $Diff->i . ' minutes ago'; } elseif($Diff->s > 0){ echo $Diff->s . ' seconds ago';}
                                                    ?>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="absolute top-0 right-1 flex items-center h-full opacity-0 content_opacitys">
                                            <div class="cursor-pointer bg-slate-200 dark:bg-slate-600 p-1 rounded" id="NotifiesToggle_Btn{{$notify->id}}" data-dropdown-toggle="NotifiesToggle{{$notify->id}}">
                                                <x-site.svg model="none" class="w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                            </div>
                                            <x-site.dropdown id="NotifiesToggle{{$notify->id}}" type="default" class="font-light text-slate-600 dark:text-slate-400 p-1">
                                                <form class="notification_form_control" action="/notify/update/{{$notify->id}}" method="POST">
                                                    @csrf
                                                        <button type="submit">
                                                            <x-site.url model="icon-left" value="seen at" class="dark:hover:bg-slate-600 hover:bg-slate-200 hover:shadow rounded p-1 cursor-pointer">
                                                                <x-site.svg model="none" class="mr-1 text-blue-500 dark:text-blue-300" path="M5 13l4 4L19 7"/>
                                                            </x-site.url>
                                                        </button>
                                                    </label>
                                                </form>
                                                <form class="notification_form_control" action="/notify/destroy/{{$notify->id}}" method="POST">
                                                    @csrf
                                                    <button type="submit">
                                                        <x-site.url model="icon-left" value="Deleted" class="dark:hover:bg-slate-600 hover:bg-slate-200 hover:shadow rounded p-1 cursor-pointer">
                                                            <x-site.svg model="none" class="mr-1 text-red-500 dark:text-red-300" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </x-site.url>
                                                    </button>
                                                </form>
                                            </x-site.dropdown>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <p class="py-3">No found records</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </x-site.dropdown>
            </li>
            <li class="mr-2 sm:flex hidden">
                <x-site.url model="default" data-dropdown-placement="bottom" data-dropdown-toggle="MessagesMenu" class="hover:-translate-y-1 cursoor-pointer p-1.5 hover:bg-slate-100 dark:hover:text-white dark:hover:bg-slate-600 cursor-pointer rounded-full">
                    <x-site.svg model="fill-2"  class="h-4 w-4" path2="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" path="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"  />
                </x-site.url>
                <!-- dropdown -->
                <x-site.dropdown id="MessagesMenu" type="default" class="w-max drop_mesagge-inset">
                    <div class="w-72 h-60 text-slate-600 dark:text-slate-300 pb-9 overflow-hidden">
                        <div class="flex items-center justify-between h-10 border-b dark:border-slate-600 dark:bg-slate-700 select-none">
                            <p class="p-1 px-2">Messages</p>
                            <div class="px-2 cursor-pointer">
                                <x-site.svg model="none" class="w-4 h-4" path="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden">
                            <p class="py-3">No found records</p>
                        </div>
                    </div>
                </x-site.dropdown>
            </li>
            <li class="ml-2 mr-2 sm:mr-4">
                <div class="cursor-pointer rounded-full transition-all duration-300 hover:-translate-y-1" data-dropdown-placement="bottom" data-dropdown-toggle="togleProfile">
                    <?php $photos = DB::table('profiles')->select('avatar','cover')->where('user_id', auth()->user()->id)->first(); ?>
                    <img class="rounded-full shadow w-8 h-8" src="{{asset('img/profile/avatar/'.$photos->avatar)}}" width="45" height="45" alt="Avatar for profile">
                </div>
            </li>
            <x-site.dropdown id="togleProfile" type="slot" class="w-max min-w-[180px] drop_mesagge-inset font-light text-slate-600 dark:text-slate-400">
                <div class="flex items-center p-2">
                    <img class="rounded-full shadow w-8 h-8 mr-2" src="{{asset('img/profile/avatar/'.$photos->avatar)}}" width="45" height="45" alt="Avatar for profile menu">
                    <div class="flex flex-col">
                        <p class="text-[13px] font-bold dark:text-white">{{Str::limit(auth()->user()->name,15,'.')}}</p>
                        <p class="text-xs dark:text-slate-300">{{Str::limit(auth()->user()->email , 28 , '...' )}}</p>
                    </div>
                </div>
                <ul class="py-1 text-sm text-gray-600 dark:text-gray-300">
                    <li>
                        <x-site.url model="icon-left" value="Profile" href="{{route('profile')}}" class="font-light py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500">
                            <x-site.svg model="none" class="mr-2 text-blue-400 dark:text-blue-300" path="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            <x-site.svg model="none" class="absolute right-2" path="M9 5l7 7-7 7" />
                        </x-site.url>
                    </li>
                    <li>
                        <x-site.url model="icon-left" value="Segurity" href="" class="font-light py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500">
                            <x-site.svg model="none" class="mr-2 text-orange-400 dark:text-orange-300" path="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            <x-site.svg model="none" class="absolute right-2" path="M9 5l7 7-7 7" />
                        </x-site.url>
                    </li>
                    <li>
                        <x-site.url model="icon-left" value="Theme" href="" class="font-light py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500">
                            <x-site.svg model="none" class="mr-2 text-purple-400 dark:text-purple-300" path="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            <x-site.svg model="none" class="absolute right-2" path="M9 5l7 7-7 7" />
                        </x-site.url>
                    </li>
                    <li>
                        <x-site.url model="icon-left" value="Configurations" href="" class="font-light py-2 px-2 hover:bg-gray-100 dark:hover:bg-slate-500">
                            <x-site.svg model="none-2" class="mr-2 text-green-400 dark:text-green-300" path="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" path2="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <x-site.svg model="none" class="absolute right-2" path="M9 5l7 7-7 7" />
                        </x-site.url>
                    </li>
                </ul>
                <div class="text-gray-600 dark:text-gray-300">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="w-full" type="submit">
                            <x-site.url model="icon-left" value="Log out" class="relative font-light text-sm py-1.5 px-2 hover:bg-gray-100 dark:hover:bg-slate-500">
                                <x-site.svg model="none" class="mr-2 text-red-400 dark:text-red-300" path="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                <x-site.svg model="none" class="absolute right-2" path="M9 5l7 7-7 7" />
                            </x-site.url>
                        </button>
                    </form>
                </div>
                <div class="py-1 px-2 flex justify-start">
                    <span class="text-xs">v1.0 <span class="font-bold text-orange-400 ml-2">News</span></span>
                </div>
            </x-site.dropdown>
        </ul>
    </div>
    <div class="relative py-3 px-2 sm:px-8 bg-[#f8fafcf5] dark:bg-[#3a4a5f]">
        <ul class="flex items-center text-slate-600 dark:text-slate-300 overflow-x-auto hidenXscrollbar">
            {{$slot}}
        </ul>
        <div class="flex sm:hidden absolute right-0 top-0 h-full bg-white dark:bg-[#3a4a5f] p-1">
            <span class="flex items-center">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-300" fillstatus="false" stroke-linecap="round" path="M9 5l7 7-7 7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
               </svg>
            </span>
        </div>
    </div>
</header>
