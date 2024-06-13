@extends('layouts.admin')

@section('title', 'CoE Treemine | Surface Finish')

@section('content')

    <div>
        <div class="my-4 flex flex-row gap-4">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <p>></p>
            <a href="{{ route('prototype.index') }}">Prototype</a>
            <p>></p>
            <a href="{{ route('prototype.index') }}">Surface Finish</a>
            <p>></p>
            <p class="text-admin-900">Edit</p>
        </div>

        <form action="{{ route('surface.update', $surface->id_surface) }}" method="POST">
            @csrf
            @method('PUT')

            <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
                <div class="flex flex-col mt-2 mb-6">
                    <label for="" class="font-semibold mb-2">Surface Finish</label>
                    <input type="text" name="surface_name" value="{{ old('surface_name', $surface->surface_name) }}"
                        class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Input a product name">
                </div>
                <div class="flex flex-col mt-2 mb-6">
                    <label for="" class="font-semibold mb-2">Price</label>
                    <input type="number" name="surface_price" value="{{ old('surface_price', $surface->surface_price) }}"
                        class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Input a product price">
                </div>
                <div class="grid place-items-end ">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
