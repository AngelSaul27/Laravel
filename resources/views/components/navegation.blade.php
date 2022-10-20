<header class="flex items-center justify-between w-full dark:bg-slate-700 p-2 px-2 sm:px-6">
    <div class="flex items-center">
      <a href="{{url('/')}}">
         <img src="{{asset('img/site/logo.png')}}" width="47" height="47" alt="Push-Code Logo">
      </a>
       <div class="flex flex-col sm:ml-1">
          <span class="font-bold text-[15px] dark:text-slate-200 text-slate-600 -mb-1">Push-Code</span>
          <span class="text-light text-[13px] dark:text-blue-200 text-blue-400">by <span class="text-green-300">AngelSaul27</span></span>
       </div>
    </div>
    <ul class="flex items-center text-sm font-light text-slate-600 dark:text-slate-200">
       {{$slot ?? ''}}
    </ul>
 </header>
