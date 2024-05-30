@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Manage Profile')

@section('content')
<div class="bg-gray-100 p-6  mt-32">
    <div class="flex flex-col justify-center items-end mr-10">
        <div class="max-w-xl w-full bg-white p-6 rounded-lg shadow-md my-6">
            <h2 class="text-xl font-semibold mb-2">Profil Saya</h2>
            <p class="text-gray-600 mb-4">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun.</p>
            <div class="border-t-4 border-green-500 mb-6"></div>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-1">Username</label>
                    <input type="text" value="Rian Abdullah" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-1">Email</label>
                    <input type="email" value="coetreemine@gmail.com" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" readonly>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-1">No Telp</label>
                    <input type="text" value="0895609413980" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" readonly>
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-white rounded-md">Save</button>
            </form>
        </div>
        <div class="max-w-xl w-full bg-white p-6 rounded-lg shadow-md my-6">
            <form class="mt-8"> <!-- Add margin top to separate forms -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-1">Current Password</label>
                    <input type="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-1">New Password</label>
                    <input type="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-1">Confirm Password</label>
                    <input type="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-white rounded-md">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection