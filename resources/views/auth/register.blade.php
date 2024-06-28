<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoE Treemine | Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <section class="bg-gray-100">
        {{-- <h2 class=" p-6 space-y-4 md:space-y-5 sm:p-5 text-2xl font-bold mb-6">LOGO</h2> --}}
        <div class="w-28 flex justify-center items-center m-5">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.png') }}" alt="Logo CoETreemine" class="w-36 h-auto">
            </a>
        </div>
        <div class="flex items-center justify-center px-6 py-10 mx-auto md:h-screen ">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-10 dark:bg-white">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                        CREATE ACCOUNT
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Username<span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" placeholder="Username" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{-- Email --}}
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email Address<span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" placeholder="coetreemine@yahoo.com" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label for="telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Phone Number<span class="text-red-500">*</span></label>
                            <input type="number" name="telp" id="telp" placeholder="08xxxxxxxxxx" value="{{ old('telp') }}" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required>
                        </div>

                        {{-- Password --}}
                        <div class="mb-5 relative">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                Password<span class="text-red-500">*</span></label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required>
                            <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-5 relative">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm
                                password_confirmation<span class="text-red-500">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required>
                            <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPasswordConfirmation()"></i>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('login') }}" class="underline text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Already
                                registered?</a>
                        </div>
                        <div class="flex items-center justify-center">
                            <button type="submit" class="mt-6 text-white bg-buyer-green hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function showPassword() {
            let password = document.getElementById("password")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }

        function showPasswordConfirmation() {
            let password = document.getElementById("password_confirmation")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }
    </script>
</body>

</html>