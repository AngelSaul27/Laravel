@section('css')
<link rel="stylesheet" href="{{asset('css/layout/countdown/countdown.css')}}">
@endsection
@section('content')
  <main class="overflow-hidden">
    {{ $slot ?? ''}}
    <div class="flex items-center justify-center h-screen">
      <div class="text-center">
        <h3 class="text-gray-400 dark:text-slate-200 text-[25px] sm:text-[50px] font-semibold">Coming Soon</h3>
        <div id="cuenta" class="overflow-hidden mb-2 mt-1"></div>
        <p class="text-gray-400 dark:text-slate-200 text-[14px] sm:text-[28px]">We are Doing Some work on the site</p>
        <span span class="text-sm mt-3 text-gray-400 text-[12px] sm:text-[16px] dark:text-slate-300">© 2022 <a class="text-orange-400" href="https://push-code.me/dashboard">Push Code</a> All rights reserved.</span>
      </div>
    </div>

  </main>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('js/layout/countdown/simplyCountdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/layout/countdown/countdown.js') }}"></script>
@endsection
