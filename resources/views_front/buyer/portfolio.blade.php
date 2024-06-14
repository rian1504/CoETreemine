@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Product Portfolio')

@section('content')

    <a href="/buyer_detail_portfolio">
    <h1 class="text-center font-extrabold text-black-900 mt-40" style="font-size: 30px;">Microcontroller Boards</h1>
    <div class="inline-grid grid-cols-3">
        <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-24 mt-24">
            <div class="flex px-4 pt-4 justify-center ">
                <img src="{{ asset('image/development board.jpg') }}" class="w-40 h-40 " />
            </div>
            <div class="mb-4 md:mb-0 md:me-1">
                <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Microcontroller Board</h1>
            </div>
        </div>
    </a>
        <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-24 mt-24">
            <div class="flex px-4 pt-4 justify-center ">
                <img src="{{ asset('image/control module.jpeg') }}" class="w-40 h-40 " />
            </div>
            <div class="mb-4 md:mb-0 md:me-1">
                <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Control Module Without USB Cable</h1>
            </div>
        </div>

        <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-24 mt-24  mb-14">
            <div class="flex px-4 pt-4 justify-center ">
                <img src="{{ asset('image/development board 16mhz.jpeg') }}" class="w-40 h-40 " />
            </div>
            <div class="mb-4 md:mb-0 md:me-1">
                <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Development Board 16MHz For Arduino</h1>
            </div>
        </div>


    </div>
@endsection