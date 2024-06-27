<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPING CART</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


{{-- <div class="grid-lama">
    <div class="inline-grid grid-cols-9 ml-12 mt-8 my-5">
        <div class="bg-red-500">
            <input type="checkbox" name="" id="" class="">
            <h1 class="inline ml-2">All</h1>
        </div>
        <h1 class="col-span-4">Product Name & Details</h1>
            <h1>Quantity</h1>
            <h1>Price</h1>
            <h1>Product File</h1>
            <h1 class="ml-5">Status</h1>
        </div>

        <div class="bg-gray-100 ml-10 mr-10">
            <div class="inline-grid grid-cols-9">
                <input type="checkbox" name="" id="" class="ml-2 bg-red-500">
                <div class="col-span-4">
                    <div class="inline-grid grid-cols-4">
                        <img src="./image/development board.jpg" alt="Image" class="me-5">
                        <div>
                            <input type="checkbox" name="" id="">
                        </div>
                        
                <img src="./image/development board.jpg" alt="Image" class="ml-2" >
          <div class="ml-10">
                            <p>2 Layers Size 10x10mm 1.6mm</p>
                            <p>Product No : WWR45TYFVG4</p>
                            <p>Solder Mask: Green</p>
                            <p>Silkscreen : White</p>
                            <h2>View Detail</h2>
                        </div>
                        <p>a</p>
                        <p>a</p>
                    </div>
                </div>
                <input type="number" name="" id="">
                <div>
                    <h1>Rp.200.00</h1>
                    <p>(0,01 kg)</p>
                </div>
                <input type="file" name="" id="">
                <div>
                    <input type="radio" name="" id="">
                    <h1>Not Completed</h1>
                </div>
            </div>
        </div>
    </div> --}}

<body>
    <nav class="border-gray-200 bg-green-950 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-white">Shopping Cart</span>
            </a>
        </div>
    </nav>

    <div class="container mx-auto mt-10 bg-gray-500">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 
                                    dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 
                                    dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all" class="ml-3">All</label>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-16">
                            Product Name
                        </th>
                        <th scope="col" class="px-12 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Details
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 
                                    dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 
                                    dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="py-4 font-semibold text-gray-900 dark:text-white flex">
                            <img src="./image/development board.jpg" class="h-28">
                            <div>
                                <p style="font-family: cambria; font-size: large;">Control Module Without USB Cable</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <button class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 
                                    bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 
                                    focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 
                                    dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <div>
                                    <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                        focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                                </div>
                                <button class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border 
                                    border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 
                                    dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">
                            <h1 class="text-2xl">200k</h1>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800" type="button">
                                View Detail
                            </button>
                            <!-- Modal toggle -->
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800" type="button">
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>


                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 
                                    dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 
                                    dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="py-4 font-semibold text-gray-900 dark:text-white flex">
                            <img src="./image/development board.jpg" class="h-28">
                            <div>
                                <p style="font-family: cambria; font-size: large;">Assembly</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <button class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 
                                    bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 
                                    focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 
                                    dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <div>
                                    <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                        focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                                </div>
                                <button class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border 
                                    border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 
                                    dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">
                            <h1 class="text-2xl">500k</h1>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-buyer-green dark:text-yellow-300 hover:underline">View
                                Details</a>
                        <td class="px-6 py-6">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            <a href="#" class=" inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-buyer-green rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none">
                                Add File</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <div class="grid grid-cols-3">
            <div>
                <div class="text-sm text-gray-600 mb-10 my-10">
                    SubTotal (1 items) : <span class="font-bold">Rp.400.000</span> <br>
                    All total : <span class="text-black font-bold">Rp.400.000</span>
                </div>
                <div>
                    <div class="mt-4 mb-10 ">
                        <button class="bg-green-500 hover:bg-green-800 hover:text-white text-white font-bold py-2 px-4 rounded">
                            Checkout
                        </button>
                    </div>

                    <!-- modal -->
                    <!-- View Detail -->
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-5xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Cart Detail
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <p class="font-semibold px-10">Basic Information : Standard PCB</p>
                                <div class="px-10 py-4 flex flex-row gap-2 whitespace-nowrap truncate">
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table class="shadow-md w-full gap-2 text-sm text-gray-500 dark:text-gray-400">
                                            <tbody>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Product No :
                                                    </th>
                                                    <td class="px-6 py-4">
                                                </tr>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Create Time :
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>

                                                </tr>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Estimated Finish Time :
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                </tr>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        SMT for PCB Service NO :
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table class="shadow-md w-full gap-2 text-sm text-gray-500 dark:text-gray-400">
                                            <tbody>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Order Status :
                                                    </th>
                                                    <td class="px-6 py-4">
                                                </tr>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Build Time :
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>

                                                </tr>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <th scope="row" class="px-4 py-4 font-medium text-left text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Gerber File :
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
                                    </script>
</body>

</html>