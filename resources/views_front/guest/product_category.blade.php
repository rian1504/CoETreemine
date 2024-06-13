@extends('layouts.guest_homepage')

@section('title', 'CoE Treemine | Product Category')

@section('content')
<h1 class="text-center font-extrabold text-black-900 mt-40" style="font-size: 30px;">CATEGORY PRODUCT</h1>
<div class="inline-grid grid-cols-4">
    <a href="/guest_portfolio">
        <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-24">
            <div class="flex px-4 pt-4 justify-center ">
                <img src="{{ asset('icon/microcontroller.png') }}" class="w-40 h-40 " />
            </div>
            <div class="mb-4 md:mb-0 md:me-1">
                <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Microcontroller Board
                </h1>
            </div>
        </div>
    </a>
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-24">
        <div class="flex justify-center items-center h-40">
            <img src="{{ asset('icon/arduino.png') }}" class="w-40 h-40" />
        </div>
        <div class="mb-4 md:mb-0 md:me-4">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Industrial Arduino Shield
            </h1>
        </div>
    </div>
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-24">
        <div class="flex justify-center items-center h-40">
            <img src="{{ asset('icon/breakout board.png') }}" class="w-40 h-40" />
        </div>
        <div class="mb-4 md:mb-0 md:me-4">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Breakout Board</h1>
        </div>
    </div>
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-20 mt-24">
        <div class="flex justify-center items-center h-40">
            <img src="{{ asset('icon/serial board.png') }}" class="w-40 h-40" />
        </div>
        <div class="mb-4 md:mb-0 md:me-1">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Serial Board</h1>
        </div>
    </div>

</div>

<div class="inline-grid grid-cols-3">
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-16 mb-7">
        <div class="flex px-4 pt-4 justify-center ">
            <img src="{{ asset('icon/motor control.png') }}" class="w-40 h-40 " />
        </div>
        <div class="mb-4 md:mb-0 md:me-1">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Motor Control</h1>
        </div>
    </div>
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-16 mb-7">
        <div class="flex px-4 pt-4 justify-center ">
            <img src="{{ asset('icon/components.png') }}" class="w-40 h-40 " />
        </div>
        <div class="mb-4 md:mb-0 md:me-4 ml-2">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Upgrade and Components</h1>
        </div>
    </div>
    <div class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-20 mt-16 mb-7">
        <div class="flex px-4 pt-4 justify-center ">
            <img src="{{ asset('icon/memory.png') }}" class="w-40 h-40 " />
        </div>
        <div class="mb-4 md:mb-0 md:me-1">
            <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Memory</h1>
        </div>
    </div>
</div>
@endsection