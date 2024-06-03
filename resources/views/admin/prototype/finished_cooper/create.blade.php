@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/admin/prototype">Porototype</a>
        <p>></p>
        <a href="/admin/prototype/finished_cooper">Finshed Cooper</a>
        <p>></p>
        <a href="/admin/prototype/finished_cooper/create" class="text-admin-900">Create</a>
    </div>
    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Name</label>
            <input type="text" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
        </div>
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Price</label>
            <input type="text" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
        </div>
        <div class="grid place-items-end ">
            <a href="#" class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Save
            </a>
        </div>
    </div>
</div>

@endsection