@extends('layouts.auth')

@section('title', 'CoE Treemine | Login')

@section('content')
<a href="{{ route('dashboard') }}" class="space-x-3 rtl:space-x-reverse">
    <div class="w-32 flex justify-start ">
        <img src="{{ asset('image/logo.png') }}" alt="Logo CoETreemine" class="image">
    </div>
</a>
<div class="flex justify-center items-center">
    <div class="px-6 py-10 w-1/2 bg-white rounded-lg shadow-lg ">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
            LOGIN
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            {{-- <!-- email --> --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address<span class="text-red-500">*</span></label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="coetreemine@yahoo.com" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <!-- password -->
            <div class="relative">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password<span class="text-red-500">*</span></label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-md border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="rounded-r-md bg-gray-50 border text-gray-900 focus:ring-green-500 focus:border-green-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" required autocomplete="current-password">
                    <i class="absolute top-12 right-3 transform -translate-y-2/4 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- email --}}
            <!-- <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email Address<span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" placeholder="coetreemine@yahoo.com" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div> -->

            {{-- password --}}
            <!-- <div class="mb-5 relative">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password<span class="text-red-500">*</span></label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring focus:ring-green-500 focus:border-green-500" required autocomplete="current-password">
                <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> -->

            {{-- remember me --}}
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center justify-center gap-1">
                    <input id="remember_me" aria-describedby="remember_me" type="checkbox" name="remember" class="focus:ring-green-500 focus:border-green-500 w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-white dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                    <label for="remember_me" class=font-medium text-primary-600 dark:text-primary-500">
                        Keep me signed in
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="text-red-500 font-medium text-primary-600 hover:underline dark:text-primary-500">
                    Forgot password?
                </a>
            </div>

            {{-- submit --}}
            <button type="submit" class="button-green">
                Sign In</button>
        </form>
    </div>
</div>
<!-- </section> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
    function showPassword() {
        let password = document.getElementById("password")
        password.type === "password" ? password.type = 'text' : password.type = 'password'
    }
</script>
@endsection