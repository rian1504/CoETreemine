<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPING CART</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>

    <nav class="border-gray-200 bg-green-950 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-white">Shopping Cart</span>
            </a>
        </div>
    </nav>

    <div class="mt-10 flex justify-center gap-24">
        <button class="bg-gray-300 hover:bg-gray-800 hover:text-white font-bold py-2 px-10 rounded">
            Custom
        </button>
        <button class="bg-green-300 hover:bg-green-800 hover:text-white font-bold py-2 px-10 rounded">
            Custom
        </button>
    </div>

    <div>
        <div>

            <div class="inline-grid grid-cols-6">
                <div class="inline-grid grid-cols-2">
                    <input type="checkbox" name="" id="">
                    <h1>ALL</h1>
                </div>
                <div>
                  <h1>Product Name & Details</h1>
                </div>
                <div>
                  <h1>Quantity</h1>
                </div>
                <div>
                  <h1>Price</h1>
                </div>
                <div>
                  <h1>Product File</h1>
                </div>
                <div>
                  <h1>Status</h1>
                </div>
            </div>
            <div class="inline-grid grid-cols-6">
                <div>
                  <input type="checkbox" name="" id="">
                </div>
                <div>
                    <img src="./Assets/PCB 1/Complete.jpg" alt="">
                    <h1>2 Layers Size 10x10mm 1.6mm</h1>
                    <p>Product No : WWR45TYFVG4</p>
                    <p>Solder Mask: Green</p>
                    <p>Silkscreen : White</p>
                    <h2>View Detail</h2>
                </div>
                <div>
                  <input type="number" name="" id="">
                </div>
                <div>
                  <h1>Rp.200.00</h1>
                  <p>(0,01 kg)</p>
                </div>
                <div>
                  <input type="file" name="" id="">
                </div>
                <div>
                  <input type="radio" name="" id="">
                  <h1>Not Completed</h1>
                </div>
            </div>

        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
        < /body> <
        /html>