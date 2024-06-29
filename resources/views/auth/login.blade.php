@extends('layouts.auth')

@section('title', 'CoE Treemine | Sign Up')

@section('content')
<a href="{{ route('dashboard') }}" class="w-1/12">
    <div class="w-full flex justify-start">
        <img src="{{ asset('image/logo.png') }}" alt="Logo CoETreemine" class="image">
    </div>
</a>
<div class="flex justify-center items-center h-full w-full my-8">
    <div class="px-6 py-10 w-1/3 bg-white rounded-lg shadow-lg ">
        <h1 class="text-3xl font-extrabold leading-tight tracking-wider text-gray-900 md:text-4xl dark:text-black text-center">
            Sign In
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            {{-- <!-- email --> --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address<span class="text-red-500">*</span></label>
                <div>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green" placeholder="coetreemine@example.com" required autofocus autocomplete="username">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <!-- password -->
            <div class="relative">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password<span class="text-red-500">*</span></label>
                <div>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-md border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="rounded-r-md bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green" required autocomplete="current-password">
                        <i class="absolute top-12 right-3 transform -translate-y-2/4 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            {{-- remember me --}}
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center justify-center gap-1">
                    <input id="remember_me" aria-describedby="remember_me" type="checkbox" name="remember" class="focus:ring-buyer-green focus:border-buyer-green w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-white dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                    <label for="remember_me" class="font-medium text-primary-600 dark:text-primary-500">
                        Keep me signed in
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="text-red-500 font-medium text-primary-600 hover:underline dark:text-primary-500">
                    Forgot password?
                </a>
            </div>

            {{-- submit --}}
            <div class="flex justify-end">
                <button type="submit" class="button-green">
                    Sign In
                </button>
            </div>
        </form>

        <!-- Sign Up link -->
        <p class="mt-4 text-sm text-center text-gray-600 dark:text-gray-400">
            Don't have an account? <a href="{{ route('register') }}" class="text-buyer-green hover:underline">Sign Up</a>
        </p>
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