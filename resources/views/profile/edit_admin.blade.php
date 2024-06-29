@extends('layouts.admin')

@section('title', 'CoE Treemine | Manage Profile')

@section('content')

<div class="w-full h-full flex flex-row justify-between my-5 gap-4">
    <div class="flex gap-4">
        <i class="fas fa-user text-6xl"></i>
        <div class="flex flex-col gap-2">
            <div class="text-xl font-semibold">{{ $user->name }}</div>
            <div class="text-gray-600">{{ $user->email }}</div>
        </div>
    </div>

    <div class="flex flex-row justify-end items-end gap-4 w-full h-full">
        {{-- Profile Information --}}
        <div class="max-w-xl w-1/2 bg-white p-8 rounded-lg shadow-md flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-semibold">My Profile</h2>
                <p class="text-gray-600 ">Manage your profile information to protect account.</p>
            </div>
            <div class="border-t-4 border-buyer-green"></div>

            <form method="post" action="{{ route('profile.admin.update') }}" class="flex flex-col gap-4">
                @csrf
                @method('patch')

                {{-- username --}}
                <div class="">
                    <label class="block text-gray-700 font-semibold">Username</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <x-input-error class="" :messages="$errors->get('name')" />
                </div>

                {{-- email --}}
                <div class="">
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <x-input-error class="" :messages="$errors->get('email')" />
                </div>

                {{-- Telp --}}
                <div class="">
                    <label class="block text-gray-700 font-semibold">No Telp</label>
                    <input type="number" id="telp" name="telp" value="{{ old('telp', $user->telp) }}" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <x-input-error class="" :messages="$errors->get('telp')" />
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="button-green">Save</button>
                </div>
            </form>
        </div>

        {{-- Update Password --}}
        <div class="max-w-xl w-1/2 bg-white p-8 rounded-lg shadow-md flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-semibold">My Password</h2>
                <p class="text-gray-600 ">Change the password for your account.
                </p>
            </div>
            <div class="border-t-4 border-buyer-green"></div>

            <form class="flex flex-col gap-4" method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                {{-- current password --}}
                <div class="relative">
                    <label class="block text-gray-700 font-semibold" for="update_password_current_password">Current
                        Password</label>
                    <input type="password" id="update_password_current_password" name="current_password" autocomplete="current-password" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <i class="absolute top-12 right-3 transform -translate-y-2/4 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash" onclick="showPasswordCurrent()"></i>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="" />
                </div>

                {{-- new password --}}
                <div class="relative">
                    <label class="block text-gray-700 font-semibold" for="update_password_password">New
                        Password</label>
                    <input type="password" id="update_password_password" name="password" autocomplete="new-password" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <i class="absolute top-12 right-3 transform -translate-y-2/4 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="" />
                </div>

                {{-- confirmation password --}}
                <div class="relative">
                    <label class="block text-gray-700 font-semibold" for="update_password_password_confirmation">
                        Confirm Password
                    </label>
                    <input type="password" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password" class="w-full p-2 border border-gray-300 rounded-md focus:ring-buyer-green focus:border-buyer-green">
                    <i class="absolute top-12 right-3 transform -translate-y-2/4 text-gray-500 hover:text-buyer-green cursor-pointer fas fa-eye-slash" onclick="showPasswordConfirmation()"></i>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="" />
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="button-green">Save</button>
                </div>
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