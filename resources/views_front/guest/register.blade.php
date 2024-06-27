<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER COETREEMINE</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
  <section class="bg-gray-100">
    <h2 class=" p-6 space-y-4 md:space-y-5 sm:p-5 text-2xl font-bold mb-6">LOGO</h2>
    <div class="flex items-center justify-center px-6 py-10 mx-auto md:h-screen ">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-10 dark:bg-white">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
            CREATE ACCOUNT
          </h1>
          <form class="space-y-4 md:space-y-6" action="#">
            <div class="mb-4">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email Address<span class="text-red-500">*</span></label>
              <input type="email" id="email" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" placeholder="coetreemine@yahui.kom" required="">
            </div>
            <div>
              <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">No Telp<span class="text-red-500">*</span></label>
              <input type="tel" name="tel" id="tel" placeholder="+62" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required="">
            </div>
            <div class="mb-5 relative">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm Password<span class="text-red-500">*</span></label>
              <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required="">
              <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"></i>
            </div>
            <div class="mb-5 relative">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm Password<span class="text-red-500">*</span></label>
              <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required="">
              <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"></i>
            </div>

        </div>
        <div class="flex items-center justify-between">
          <div class="ml-7 flex items-start">
            <div class="flex items-center h-5">
              <input id="remember" aria-describedby="remember" type="checkbox" class="focus:ring-green-500 focus:border-green-500 w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-white dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
            </div>
            <div class="ml-3 text-sm">
              <label for="remember" class="text-sm font-medium text-primary-600 dark:text-primary-500">Keep me signed in</label>
            </div>
          </div>
          <a href="#" class="underline text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
        </div>
        <div class="flex items-center justify-center">
          <button type="submit" class="mt-6 text-white bg-buyer-green hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>

          </p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>