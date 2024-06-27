<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN COETREEMINE</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <section class="bg-gray-100">
        <h2 class=" p-6 space-y-4 md:space-y-5 sm:p-5 text-2xl font-bold mb-6">LOGO</h2>
        <div class="flex items-center justify-center px-6 py-10 mx-auto md:h-screen ">
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-white">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                        LOGIN
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- email --}}
                        <div class="mb-4">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email Address<span
                                    class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email"
                                class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500"
                                placeholder="coetreemine@yahui.kom" required autofocus autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- password --}}
                        <div class="mb-5 relative">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password<span
                                    class="text-red-500">*</span></label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500"
                                required autocomplete="current-password">
                            <i
                                class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"></i>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember_me" aria-describedby="remember_me" type="checkbox"
                                        class="focus:ring-green-500 focus:border-green-500 w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-white dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember_me"
                                        class="text-sm font-medium text-primary-600 dark:text-primary-500">Keep me
                                        signed in</label>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}"
                                class="underline text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                password?</a>
                        </div>
                        <button type="submit"
                            class="text-white bg-greens-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Sign
                            In</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
