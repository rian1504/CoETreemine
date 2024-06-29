@extends('layouts.admin')

@section('title', 'CoE Treemine | Manage Profile')

@section('content')

    <div class="mt-5">
        <div class="flex">
            <i class="fas fa-user text-5xl"></i>
            <div class="text-xl font-semibold">{{ $user->name }}</div>
            <div class="text-gray-600">{{ $user->email }}</div>
        </div>

        <div class="flex flex-col justify-center items-end mr-10">
            {{-- Profile Information --}}
            <div class="max-w-xl w-full bg-white p-6 rounded-lg shadow-md my-6">
                <h2 class="text-xl font-semibold mb-2">Profil Saya</h2>
                <p class="text-gray-600 mb-4">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan
                    akun.
                </p>
                <div class="border-t-4 border-green-500 mb-6"></div>
                <form method="post" action="{{ route('profile.admin.update') }}">
                    @csrf
                    @method('patch')

                    {{-- username --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1">Username</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    {{-- email --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    {{-- Telp --}}
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-1">No Telp</label>
                        <input type="number" id="telp" name="telp" value="{{ old('telp', $user->telp) }}"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <x-input-error class="mt-2" :messages="$errors->get('telp')" />
                    </div>

                    <button type="submit" class="button-green">Save</button>
                </form>
            </div>

            {{-- Update Password --}}
            <div class="max-w-xl w-full bg-white p-6 rounded-lg shadow-md my-6">
                <form class="mt-8" method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    {{-- current password --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1" for="update_password_current_password">Current
                            Password</label>
                        <input type="password" id="update_password_current_password" name="current_password"
                            autocomplete="current-password"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"
                            onclick="showPasswordCurrent()"></i>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    {{-- new password --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1" for="update_password_password">New
                            Password</label>
                        <input type="password" id="update_password_password" name="password" autocomplete="new-password"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"
                            onclick="showPassword()"></i>
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    {{-- confirmation password --}}
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-1"
                            for="update_password_password_confirmation">Confirm Password</label>
                        <input type="password" id="update_password_password_confirmation" name="password_confirmation"
                            autocomplete="new-password"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash"
                            onclick="showPasswordConfirmation()"></i>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit"
                        class="w-full py-2 px-4 bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-white rounded-md">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPasswordCurrent() {
            let password = document.getElementById("update_password_current_password")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }

        function showPassword() {
            let password = document.getElementById("update_password_password")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }

        function showPasswordConfirmation() {
            let password = document.getElementById("update_password_password_confirmation")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }
    </script>
@endsection
