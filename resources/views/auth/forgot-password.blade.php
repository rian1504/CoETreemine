@extends('layouts.auth')

@section('title', 'CoE Treemine | Forgot Password')

@section('content')
<div class="relative w-1/12">
    <a href="{{ route('login') }}" class="absolute left-4 top-4 button-grey ">
        <svg class="w-6 h-6  text-gray-800 hover:text-white focus:text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m15 19-7-7 7-7" />
        </svg>
    </a>
</div>
<div class="flex items-center justify-center h-screen">
    <div class="w-1/3 bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-lg font-extrabold leading-tight tracking-wider text-gray-900 md:text-xl dark:text-black text-center">
            FORGOT PASSWORD
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('password.email') }}">
            @csrf
            <p class="text-gray-600 dark:text-gray-400 text-center mb-4">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address <span class="text-red-500">*</span></label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-buyer-green focus:border-buyer-green block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-buyer-green dark:focus:border-buyer-green" placeholder="name@example.com" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="button-green">
                    EMAIL PASSWORD RESET LINK
                </button>
            </div>
        </form>
    </div>
</div>
@endsection