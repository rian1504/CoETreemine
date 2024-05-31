@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <h1 class="text-admin-900">Home</h1>
        <h2>></h2>
        <h3 class="">Assembly</h3>
    </div>
    <div class="pb-4 flex flex-row justify-between">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search for items">
        </div>
        <a href="/portfolio/create" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add
        </a>
    </div>
@endsection