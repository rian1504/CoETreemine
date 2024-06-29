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
            <h1
                class="text-3xl font-extrabold leading-tight tracking-wider text-gray-900 md:text-4xl dark:text-black text-center">
                Sign Up
            </h1>
            <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                {{-- Name --}}
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username<span
                            class="text-red-500">*</span></label>
                    <div>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green"
                                placeholder="Username" autofocus required>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        Address<span class="text-red-500">*</span></label>
                    <div>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green"
                                placeholder="coetreemine@example.com" required autocomplete="username">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                {{-- Phone --}}
                <div>
                    <label for="telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        Number<span class="text-red-500">*</span></label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="number" name="telp" id="telp" placeholder="08xxxxxxxxxx"
                            value="{{ old('telp') }}"
                            class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green"
                            required>
                    </div>
                </div>

                {{-- Password --}}
                <div class="relative">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password<span
                            class="text-red-500">*</span></label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green"
                            required autocomplete="new-password">
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash"
                            onclick="showPassword()"></i>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Confirm Password --}}
                <div class="relative">
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password<span
                            class="text-red-500">*</span></label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green"
                            required autocomplete="new-password">
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash"
                            onclick="showPasswordConfirmation()"></i>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- Submit --}}
                <div class="flex justify-end">
                    <button type="submit" class="button-green">
                        Submit
                    </button>
                </div>

                {{-- Already registered --}}
                <p class="mt-4 text-sm text-center text-gray-600 dark:text-gray-400">
                    Already registered? <a href="{{ route('login') }}" class="text-buyer-green hover:underline">Login</a>
                </p>
            </form>
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
@endsection
