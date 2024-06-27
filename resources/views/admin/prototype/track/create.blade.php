@extends('layouts.admin')

@section('title', 'CoE Treemine | Min Track')

@section('content')
<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Prototype</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Min Track</a>
        <p>></p>
        <p class="text-admin-900">Create</p>
    </div>

    <form action="{{ route('track.store') }}" method="POST">
        @csrf
        <div class=" min-h-[450px] bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Min Track/spacing</label>
                <input type="text" name="track_name" value="{{ old('track_name') }}" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
            </div>
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Price</label>
                <input type="number" name="track_price" value="{{ old('track_price') }}" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
            </div>
            <div class="grid place-items-end ">
                <button type="submit" class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>

@endsection