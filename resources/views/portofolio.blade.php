<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <title>Portofolio</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <h1 class="text-center font-extrabold text-black-900" style="font-size: 30px;">Microcontroller Boards</h1>
        <div>
        <div
            class="w-56 h-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ml-16 mt-24">
            <div class="flex px-4 pt-4 justify-center ">
                <img src="{{ asset('image/microcontroller.png') }}" class="w-40 h-40 " />
            </div>
            <div class="mb-4 md:mb-0 md:me-1">
                <h1 class="mb-2 text-lg font-bold text-gray-900 dark:text-white text-center">Microcontroller Board</h1>
            </div>
        </div>
        </div>

</body>
</html>