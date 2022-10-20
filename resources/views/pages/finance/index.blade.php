@extends('layouts.app')
@section('title','App | Finance')
@section('css')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
@endsection
@section('content')
<main class="px-3 md:px-10 py-2 md:py-3">
    <x-site.breadcrumb class="text-slate-500 my-5" clase="hover:text-slate-400 dark:hover:text-white" value="Home" location="{{route('dashboard')}}">
        <x-site.breadcrumb-item model="enabled" clase="hover:text-slate-400 dark:hover:text-white" value="APPS" />
        <x-site.breadcrumb-item model="disabled" clase="text-slate-600" value="Finance" />
    </x-site.breadcrumb>

    <div class="flex lg:flex-row flex-col gap-4 text-slate-600 dark:text-slate-400">
        <div class="panel_dashboard w-full lg:w-8/12">
            <p class="text-xl font-[500] md:mb-5">My Dashboard</p>
            <!-- Total finance -->
            <div class="flex items-center gap-4 md:py-4 pl-0 md:pt-2 md:pr-0 p-4 overflow-x-auto hidenXscrollbar overflow-y-hidden">
                <div  class="flex items-center gap-5 w-full min-w-max p-5 rounded-md bg-slate-700 dark:bg-slate-800/60 drop-shadow-xl">
                    <div class="p-1 min-w-max rounded-full bg-slate-600 dark:bg-slate-700/80">
                        <svg width="32" height="32" class="w-8 h-8" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3335 9.641V11.3577C18.3335 11.816 17.9668 12.191 17.5001 12.2077H15.8668C14.9668 12.2077 14.1418 11.5493 14.0668 10.6493C14.0168 10.1243 14.2168 9.63267 14.5668 9.291C14.8751 8.97433 15.3001 8.79102 15.7668 8.79102H17.5001C17.9668 8.80768 18.3335 9.18267 18.3335 9.641Z" fill="#85C7A3"/>
                            <path d="M17.0584 13.4583H15.8667C14.2834 13.4583 12.95 12.2666 12.8167 10.75C12.7417 9.88329 13.0584 9.01663 13.6917 8.39996C14.225 7.84996 14.9667 7.54163 15.7667 7.54163H17.0584C17.3 7.54163 17.5 7.34163 17.475 7.09996C17.2917 5.07496 15.95 3.69163 13.9584 3.45829C13.7584 3.42496 13.55 3.41663 13.3334 3.41663H5.83335C5.60002 3.41663 5.37502 3.43329 5.15835 3.46663C3.03335 3.73329 1.66669 5.31663 1.66669 7.58329V13.4166C1.66669 15.7166 3.53335 17.5833 5.83335 17.5833H13.3334C15.6667 17.5833 17.275 16.125 17.475 13.9C17.5 13.6583 17.3 13.4583 17.0584 13.4583ZM10.8334 8.62496H5.83335C5.49169 8.62496 5.20835 8.34163 5.20835 7.99996C5.20835 7.65829 5.49169 7.37496 5.83335 7.37496H10.8334C11.175 7.37496 11.4584 7.65829 11.4584 7.99996C11.4584 8.34163 11.175 8.62496 10.8334 8.62496Z" fill="#85C7A3"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-slate-300 font-light tracking-wider text-sm mb-1">Total balance</span>
                        <span class="text-white font-[700] text-xl tracking-wider">$0.00</span>
                    </div>
                </div>
                <div  class="flex items-center gap-5 w-full min-w-max p-5 rounded-md bg-white dark:bg-slate-700 drop-shadow-xl">
                    <div class="p-1 min-w-max rounded-full bg-slate-200 dark:bg-slate-600">
                        <svg width="32" height="32" class="w-8 h-8 fill-slate-600 dark:fill-slate-400" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3335 9.641V11.3577C18.3335 11.816 17.9668 12.191 17.5001 12.2077H15.8668C14.9668 12.2077 14.1418 11.5493 14.0668 10.6493C14.0168 10.1243 14.2168 9.63267 14.5668 9.291C14.8751 8.97433 15.3001 8.79102 15.7668 8.79102H17.5001C17.9668 8.80768 18.3335 9.18267 18.3335 9.641Z"/>
                            <path d="M17.0584 13.4583H15.8667C14.2834 13.4583 12.95 12.2666 12.8167 10.75C12.7417 9.88329 13.0584 9.01663 13.6917 8.39996C14.225 7.84996 14.9667 7.54163 15.7667 7.54163H17.0584C17.3 7.54163 17.5 7.34163 17.475 7.09996C17.2917 5.07496 15.95 3.69163 13.9584 3.45829C13.7584 3.42496 13.55 3.41663 13.3334 3.41663H5.83335C5.60002 3.41663 5.37502 3.43329 5.15835 3.46663C3.03335 3.73329 1.66669 5.31663 1.66669 7.58329V13.4166C1.66669 15.7166 3.53335 17.5833 5.83335 17.5833H13.3334C15.6667 17.5833 17.275 16.125 17.475 13.9C17.5 13.6583 17.3 13.4583 17.0584 13.4583ZM10.8334 8.62496H5.83335C5.49169 8.62496 5.20835 8.34163 5.20835 7.99996C5.20835 7.65829 5.49169 7.37496 5.83335 7.37496H10.8334C11.175 7.37496 11.4584 7.65829 11.4584 7.99996C11.4584 8.34163 11.175 8.62496 10.8334 8.62496Z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-light tracking-wider text-sm mb-1">Total spending</span>
                        <span class="dark:text-white font-[700] text-xl tracking-wider">$0.00</span>
                    </div>
                </div>
                <div  class="flex items-center gap-5 w-full min-w-max p-5 rounded-md bg-white dark:bg-slate-700 drop-shadow-xl">
                    <div class="p-1 min-w-max rounded-full bg-slate-200 dark:bg-slate-600">
                        <svg width="32" height="32" class="w-8 h-8 fill-slate-600 dark:fill-slate-400" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16671 13C2.32504 13 0.833374 14.4917 0.833374 16.3334C0.833374 16.9584 1.00837 17.55 1.31671 18.05C1.89171 19.0167 2.95004 19.6667 4.16671 19.6667C5.38337 19.6667 6.44171 19.0167 7.01671 18.05C7.32504 17.55 7.50004 16.9584 7.50004 16.3334C7.50004 14.4917 6.00837 13 4.16671 13ZM5.40837 16.9417H4.79171V17.5917C4.79171 17.9334 4.50837 18.2167 4.16671 18.2167C3.82504 18.2167 3.54171 17.9334 3.54171 17.5917V16.9417H2.92504C2.58337 16.9417 2.30004 16.6584 2.30004 16.3167C2.30004 15.975 2.58337 15.6917 2.92504 15.6917H3.54171V15.1C3.54171 14.7584 3.82504 14.475 4.16671 14.475C4.50837 14.475 4.79171 14.7584 4.79171 15.1V15.6917H5.40837C5.75004 15.6917 6.03337 15.975 6.03337 16.3167C6.03337 16.6584 5.75837 16.9417 5.40837 16.9417ZM17.9167 10.9167H15.8334C14.9167 10.9167 14.1667 11.6667 14.1667 12.5834C14.1667 13.5 14.9167 14.25 15.8334 14.25H17.9167C18.15 14.25 18.3334 14.0667 18.3334 13.8334V11.3334C18.3334 11.1 18.15 10.9167 17.9167 10.9167ZM13.7744 5.00017C14.0244 5.24184 13.816 5.61684 13.466 5.61684L6.56607 5.6085C6.16607 5.6085 5.96607 5.12517 6.2494 4.84184L7.70773 3.37517C8.94104 2.15017 10.9327 2.15017 12.166 3.37517L13.741 4.96684C13.7494 4.97517 13.766 4.99184 13.7744 5.00017Z"/>
                            <path d="M18.2245 16.05C17.7162 17.7667 16.2495 18.8334 14.2495 18.8334H8.83283C8.50783 18.8334 8.29948 18.475 8.43283 18.175C8.68283 17.5917 8.84116 16.9334 8.84116 16.3334C8.84116 13.8084 6.78281 11.75 4.25781 11.75C3.62448 11.75 3.00781 11.8834 2.44115 12.1334C2.13281 12.2667 1.75781 12.0584 1.75781 11.725V10.5C1.75781 8.23337 3.12448 6.65004 5.24948 6.38337C5.45781 6.35004 5.6828 6.33337 5.91614 6.33337H14.2495C14.4662 6.33337 14.6745 6.34171 14.8745 6.37504C16.5578 6.56671 17.7745 7.59171 18.2245 9.11671C18.3078 9.39171 18.1078 9.66671 17.8245 9.66671H15.9162C14.1078 9.66671 12.6745 11.3167 13.0662 13.1917C13.3412 14.5584 14.6078 15.5 15.9995 15.5H17.8245C18.1162 15.5 18.3078 15.7834 18.2245 16.05Z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-light tracking-wide text-sm mb-1">Total saved</span>
                        <span class="dark:text-white font-[700] text-xl tracking-wider">$0.00</span>
                    </div>
                </div>
            </div>
            <!-- Charts -->
            <div class="w-full overflow-x-auto hidenXscrollbar drop-shadow-xl">
                <div class="w-full h-full bg-slate-50 dark:bg-slate-700 rounded-md p-3 md:p-5 mt-3 md:mt-5">
                    <canvas id="myChart" class="w-full h-full max-h-[430px]" width="100%" height="100%"></canvas>
                </div>
            </div>
        </div>
        <div class="panel_accouts w-full lg:w-4/12">
            <div class="w-full px-3 flex flex-col">
                <p class="text-xl font-[500]">My Accounts</p>
                <!-- carousel -->
                <section class="splide">
                    <div class="splide__track">
                      <ul class="splide__list">
                        <li class="splide__slide flex items-center justify-center p-5" data-panel-slide="panel_slide_0">
                            <div class="relative w-max h-max">
                                <img class="max-w-[300px] block mx-auto drop-shadow-lg" src="{{asset('svg/cards/card_1.svg')}}" width="280px" height="280px" alt="card finance">
                            </div>
                        </li>
                        <li class="splide__slide flex items-center justify-center p-5" data-panel-slide="panel_slide_1">
                            <div class="relative w-max h-max">
                                <img class="max-w-[300px] block mx-auto drop-shadow-lg" src="{{asset('svg/cards/card_2.svg')}}" width="280px" height="280px" alt="card finance">
                            </div>
                        </li>
                        <li class="splide__slide flex items-center justify-center p-5" data-panel-slide="panel_slide_2">
                            <div class="relative w-max h-max">
                                <img class="max-w-[300px] block mx-auto drop-shadow-lg" src="{{asset('svg/cards/card_3.svg')}}" width="280px" height="280px" alt="card finance">
                            </div>
                        </li>
                      </ul>
                    </div>
                </section>
                <!-- carousel elements -->
                <section id="slide_panel_container">
                    <div class="slide01-target hidden"><!-- Slide Panel Example 1 -->
                        <div class="p-3 flex flex-col gap-1">
                            <p class="text-center font-light tracking-wider text-[18px]">Credit Card</p>
                            <div class="flex items-center justify-between font-bold tracking-wider dark:text-slate-100">
                                <p>Balance</p>
                                <span>0.0 USD</span>
                            </div>
                            <div class="flex items-center justify-between tracking-wider dark:text-slate-400 font-light">
                                <p>Credit Limit</p>
                                <span>3,000 USD</span>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <p class="font-[500] tracking-wider dark:text-slate-100">Last Transaction</p>
                                <a class="flex items-center text-blue-500 text-sm" href="#">
                                    <span>Viell All</span>
                                    <x-site.svg model="none" path="M9 5l7 7-7 7" />
                                </a>
                            </div>
                            <div class="flex flex-col items-center justify-center p-2 h-full max-h-60 overflow-hidden">
                                <img class="w-64 h-full" src="{{asset('img/ilustraciones/finance_girl.png')}}" alt="finance girl image">
                                <div class="font-light text-sm dark:text-slate-300">Not found records</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide02-target hidden"><!-- Slide Panel Example 2 -->
                        <div class="p-3 flex flex-col gap-1">
                            <p class="text-center font-light tracking-wider text-[18px]">Debit Card</p>
                            <div class="flex items-center justify-between font-bold tracking-wider dark:text-slate-100">
                                <p>Balance</p>
                                <span>0.0 USD</span>
                            </div>
                            <div class="flex items-center justify-between tracking-wider dark:text-slate-400 font-light">
                                <p>Tag</p>
                                <span>S/N</span>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <p class="font-[500] tracking-wider dark:text-slate-100">Last Transaction</p>
                                <a class="flex items-center text-blue-500 text-sm" href="#">
                                    <span>Viell All</span>
                                    <x-site.svg model="none" path="M9 5l7 7-7 7" />
                                </a>
                            </div>
                            <div class="flex flex-col items-center justify-center p-2 h-full max-h-60 overflow-hidden">
                                <img class="w-64 h-full" src="{{asset('img/ilustraciones/finance_girl.png')}}" alt="finance girl image">
                                <div class="font-light text-sm dark:text-slate-300">Not found records</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide03-target hidden"><!-- Slide Panel Example 3 -->
                        <div class="p-3 flex flex-col gap-1">
                            <p class="text-center font-light tracking-wider text-[18px]">Ahorros</p>
                            <div class="flex items-center justify-between font-bold tracking-wider dark:text-slate-100">
                                <p>Balance</p>
                                <span>0.0 USD</span>
                            </div>
                            <div class="flex items-center justify-between tracking-wider dark:text-slate-400 font-light">
                                <p>Tag</p>
                                <span>S/N</span>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <p class="font-[500] tracking-wider dark:text-slate-100">Last Transaction</p>
                                <a class="flex items-center text-blue-500 text-sm" href="#">
                                    <span>Viell All</span>
                                    <x-site.svg model="none" path="M9 5l7 7-7 7" />
                                </a>
                            </div>
                            <div class="flex flex-col items-center justify-center p-2 h-full max-h-60 overflow-hidden">
                                <img class="w-64 h-full" src="{{asset('img/ilustraciones/finance_girl.png')}}" alt="finance girl image">
                                <div class="font-light text-sm dark:text-slate-300">Not found records</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="w-full text-slate-600 dark:text-slate-400 my-5 overflow-hidden">
        <p class="text-xl font-[500]">Invoices</p>
        <div class="panel_invoice flex md:items-center md:flex-row flex-col md:justify-between md:gap-0 gap-2 py-3 px-1">
            <!-- searching -->
            <label for="search_invoice_input" class="w-full md:w-max h-max relative">
                <x-site.svg class="absolute left-2 top-2.5" model="none" path="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                <x-site.input id="search_invoice_input" class="w-full pl-8 rounded-md" model="default" type="search" />
            </label>
            <!-- filter and create -->
            <div class="flex items-center gap-2">
                <x-site.url href="" class="items-center rounded-md bg-green-500 text-white shadow px-3 py-2 hover:-translate-y-1" model="icon-left" value="Create Invoice">
                    <x-site.svg model="none" class="mr-1" path="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                </x-site.url>
                <x-site.url class="cursor-pointer items-center rounded-md dark:bg-slate-600 dark:text-white shadow px-3 py-2 hover:-translate-y-1" model="icon-left" value="Filters">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 144h448M112 256h288M208 368h96"/>
                    </svg>
                </x-site.url>
            </div>
        </div>
    </div>
    <!-- table invoice -->
    <div class="overflow-x-auto hidenXscrollbar overflow-y-auto max-h-screen">
        <table class="w-full text-slate-600 dark:text-slate-400 mb-5">
            <thead class="uppercase tracking-wide text-slate-700 dark:text-slate-300">
                <tr>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Card/Account</p>
                    </th>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Date</p>
                    </th>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Order/Type</p>
                    </th>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Amount</p>
                    </th>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Status</p>
                    </th>
                    <th class="w-max py-3">
                        <p class="text-sm text-left font-light">Action</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="flex gap-2">
                            <div class="w-max h-max p-[2px] rounded-full bg-slate-100 dark:bg-slate-600 drop-shadow-sm">
                                <img src="{{asset('img/site/logo.png')}}" alt="logo card/client/account invoice" width="40" height="40">
                            </div>
                            <div class="flex items-start flex-col">
                                <span class="dark:text-white">Bank Of American</span>
                                <span class="text-xs font-light tracking-wider">Inv:AGL55678</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-start flex-col">
                            <span class="dark:text-white">14 Apr 2022</span>
                            <span class="text-xs font-light tracking-wider">at 8:00 PM</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-start flex-col">
                            <span class="dark:text-white">Payment</span>
                            <span class="text-xs font-light tracking-wider">Credit Card</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-start flex-col">
                            <span class="dark:text-slate-100">$0.0 USD</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-start flex-col">
                            <span class="text-green-600 bg-green-300 px-3 py-1 rounded-md drop-shadow">Paid</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center gap-2">
                            <span class="hover:bg-slate-300 dark:hover:bg-slate-600 hover:drop-shadow px-2 py-1 rounded-md cursor-pointer" data-dropdown-toggle="table_invoice_action">
                                <x-site.svg model="none" path="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </span>
                            <x-site.dropdown type="fill-none" id="table_invoice_action" class="bg-slate-100 dark:bg-slate-600">
                                <x-site.url class="font-light block py-2 px-2 hover:bg-gray-200 dark:hover:bg-slate-500 cursor-pointer" model="icon-left" value="View">
                                    <x-site.svg model="none" class="mr-1 text-green-400" path="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </x-site.url>
                                <x-site.url class="font-light block py-2 px-2 hover:bg-gray-200 dark:hover:bg-slate-500 cursor-pointer" model="icon-left" value="Edit">
                                    <x-site.svg model="none" class="mr-1 text-blue-400" path="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </x-site.url>
                                <x-site.url class="font-light block py-2 px-2 hover:bg-gray-200 dark:hover:bg-slate-500 cursor-pointer" model="icon-left" value="Delete">
                                    <x-site.svg model="none" class="mr-1 text-red-400" path="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </x-site.url>
                            </x-site.dropdown>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script src="{{asset('js/app/finance/app.js')}}"></script>
@endsection
