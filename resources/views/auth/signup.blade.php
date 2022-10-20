@extends('layouts.global')
@section('title', 'Register')
@section('global')
<main class="px-3 md:px-5 py-2 md:py-3">
   <div class="grid grid-cols-1 md:grid-cols-2">
      <form action="{{route('register.store')}}" method="post">
         @csrf
         <div class="flex flex-col py-5 md:px-5 lg:px-12">
            <p class="mx-auto text-slate-600 dark:text-slate-200 font-semibold text-xl">Log in to app</p>
            <x-site.label value="Your Name"/>
            <x-site.input type="text" name="name" model="default" placeholder="name" required value="{{old('name')}}" />
            <x-site.label value="Your Email"/>
            <x-site.input type="email" name="email" model="default" placeholder="your_email_@domain.com" required value="{{old('email')}}" />
            <x-site.label value="Your Password" />
            <x-site.input type="password" name="password" model="default" placeholder="********" required value="{{old('password')}}" />
            <x-site.label value="Comfirm Your Password" />
            <x-site.input type="password" name="password_confirmation" model="default" placeholder="********" required value="{{old('password_confirmation')}}" />
            <a href="" class="text-sm text-blue-400 text-right font-light my-3">Will accept the conditions?</a>
            <x-site.button class="bg-[#4965ab] mt-1 mx-auto block" fill="none" value="Sing Up" />
            <p class="text-sm font-light text-slate-600 dark:text-slate-200 mt-2">Alredy registered? <a class="text-blue-400" href="{{route('login')}}">Login account</a></p>
         </div>
      </form>
      <div class="md:flex items-center justify-center hidden overflow-hidden">
         <img class="mx-auto blovk my-5  max-w-[450px] max-h-[250px] lg:max-w-[500px] lg:max-h-[300px]" src="{{asset('img/ilustraciones/devices.png')}}" width="500" height="300" alt="">
      </div>
   </div>
</main>
@endsection
