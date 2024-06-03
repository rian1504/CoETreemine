@extends('layouts.admin')

@section('title', 'CoE Treemine | Prototype Board Type')

@section('content')
<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="">Prototype</a>
        <p>></p>
        <a href="">Boards</a>
        <p>></p>
        <a href="" class="text-admin-900">Create</a>
    </div>
    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Board Type</label>
            <select id="" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                <option selected></option>
                <option value="SP">Single Pieces</option>
                <option value="SP">Panel by Customer</option>
                <option value="PP">Panel by Polibatam</option>
            </select>
        </div>
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Price</label>
            <input type="number" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
        </div>
        <div>
            <img class="h-auto max-w-52 rounded-lg shadow-xl dark:shadow-gray-800" id="imagePreview">
        </div>
        <div class="grid place-items-end ">
            <a href="#" class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Save
            </a>
        </div>
    </div>
</div>

@endsection