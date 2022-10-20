@extends('layouts.app')
@section('title', 'Activitys')
@section('css')
<link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
@endsection
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 mt-5" clase="hover:text-slate-400 dark:hover:text-white" value="Home" location="{{route('dashboard')}}">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-slate-400 dark:hover:text-white" value="APPS" />
        <x-site.breadcrumb-item model="disabled" clase="text-slate-600" value="Activity" />
    </x-site.breadcrumb>

</main>
@endsection
@section('js')
<script src="{{asset('js/flatpickr.min.js')}}"></script>
@endsection

