<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD FILE</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar dengan Header Upload File</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>


<nav class="bg-gray-300 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="ml-5 font-semibold self-center text-5 font-medium text-black">Upload File</span>
            </a>
        </div>
    </nav>
    <div class="bg-white shadow-md p-4 rounded-md">
    <div class="ml-8 my-5 text-2xl font-bold text-gray-800">
  <span class="text-black">Attach Your Gerber Files</span>
  <p class="text-base inline font-medium text-green-800 mx-5">PCBway will never disclose your PCB files to any third party!</p>
</div>
<div class="flex items-center mt-10">
  <input id="checkbox1" type="checkbox" class="ml-8 form-checkbox h-5 w-5 text-blue-600">
  <label for="checkbox1" class="ml-5">Gerber File</label>
  <div class="flex-1"></div>
  <input id="checkbox2" type="checkbox" class="ml-auto form-checkbox h-5 w-5 text-blue-600 ">
  <label for="checkbox2" class="ml-5">DXP</label>
  <div class="flex-1"></div>
  <input id="checkbox3" type="checkbox" class="mr-8 form-checkbox h-5 w-5 text-blue-600">
  <label for="checkbox3" class="mr-40">Other</label>
</div>
</div>
</div>
      <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-md" >
      <td class="border-t px-6 py-4">
        <button class="mt-10 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          + Add Gerber File
        </button>
        <span class="mt-9 text-gray-500 ml-2">.rar, .zip or Maximum 50M (All uploads are secure and confidential.)</span>
        </div>
        </div>
      </td>
    </tr>
 

<div class="flex mt-10 ml-5 ">
  <div>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
      Submit Order Now
    </button>
  </div>
  <div class="ml-4 mt-auto">
    <button class="bg-gray-400 text-gray-800 hover:underline py-2 px-2 ">
      skip
    </button>
  </div>
</div>
</div>
</body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
