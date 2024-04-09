<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="border-gray-200 bg-green-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center  ">
                <i class=" fa-solid fa-arrow-left fa-2x text-black"></i>
                <p class="ml-2 self-center text-2xl font-semibold whitespace-nowrap text-white">Payment</p>
            </a>
    </nav>
    <div
        class="w-11/12 h-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-12 mt-8 grid grid-row-4">
        <div>
            <h1 class="text-justify font-bold text-black-500 mt-2 ml-3 flex" style="font-size: 15px;">Destination
                Address :</h1>
            <p class=" ml-6 text-gray-700 text-base px-6 py-4">
                Rian Abdullah <br> (+62) 852-6545-7865 <br> Jln. Laksamana Bintan Blok A No. 59<br>
                Sei Panas, Kec. Batam Kota <br> Kota Batam <br>
            </p>
        </div>
        <div class="grid-col-2">
            <div class="px-10 p-2 ">
                <img src="./image/development board.jpg" class="" width="250" height="200"
                    style="float: left; margin-right: 10px;">
            </div>
            <div class="font-bold text-black-500 p-14">
                <h1>Control Module Without USB Cable</h1>
            </div>
        </div>
        <div class="bg-gray-200 ml-10 mr-10 shadow-md h-9">
            <div class="flex items-center p-1">
                <h1>Message:</h1>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class=" text-sm text-gray-600 mb-4 mt-4 ml-9 ">
               <span class="col-start-1 col-end-3">Order Total (1 product) :</span> <br>
                <span class="col-start-1 col-end-3">SubTotal for ptoduct :</span> <br>
                 <span class="col-start-1 col-end-3">Shipping costs : </span> <br>
                <span class="col-start-1 col-end-3">Total Payment :</span>
        </div>
        <div class="grid grid-cols-2 ">
            <div class="text-sm text-gray-600 mt-10 mr-7 ">
                <span class=" font-bold col-end-7 col-span-2  ">Rp.400.000</span> <br>
                <span class="font-bold col-end-7 col-span-2 ">Rp.50.000</span> <br>
                <span class="text-black font-bold col-end-7 col-span-2 ">Rp.450.000</span>
            </div>
        </div>
        <div class="mt-4 mb-10 ml-9 text-end mr-4 ">
            <button class="bg-green-800 hover:bg-green-600 hover:text-white text-white font-bold py-2 px-4 rounded">
                Pay Now
            </button>
        </div>
    </div>
</body>

</html>