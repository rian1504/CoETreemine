<!DOCTYPE html>
<html lang="en">

<head>
    <title>History</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <nav class="border-gray-200 bg-green-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center  ">
                <i class=" fa-solid fa-arrow-left fa-2x text-black"></i>
                <p class="ml-2 self-center text-2xl font-semibold whitespace-nowrap text-white">History</p>
            </a>
    </nav>

    <div class="text-center">
        <h1 class="font-extrabold text-black-900" style="font-size: 28px;">HISTORY</h1>
        <div class="border border-black mx-auto w-auto"></div>
    </div>

    <div
        class="w-11/12 h-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-12 mt-24 flex">
        <div>
            <p class="text-justify font-medium text-black-500 mt-2 ml-3 flex" style="font-size: 15px;">Sunday, 01 July 2023</p>
        </div>
        <div>
            <img src="./image/development board.jpg" class="ml-3 mt-6" width="250" height="200">
        </div>

        <div>
            <div class="inline-grid grid-cols-2 mt-10">
                <div class="text-justify font-bold text-black-900" style="font-size: 18px;">
                    <h2 class="mb-4">Control Module Without USB Cable</h2>
                </div>
            </div>


            <div>
                <p class="mb-4">Rp.450.000</p>
            </div>
        <div class="inline-grid grid-cols-2">
            <div>
                <div class="grid grid-rows-3">
                <div>
                    <p class="font-bold">Order Quantity (1 Product)</p>
                </div>
                </div>
            </div>

            <div>
                <p class="font-bold text-right">Rp.450.000</p>
            </div>
            <div>
                <p class="font-bold text-green-600 text-right">Order Completed</p>
            </div>
        </div>
    </div>
    
</body>

</html>