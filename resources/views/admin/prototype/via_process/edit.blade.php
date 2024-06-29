@extends('layouts.admin')

@section('title', 'CoE Treemine | Via Process')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Prototype</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Via Process</a>
        <p>></p>
        <p class="text-admin-green">Edit</p>
    </div>

    <form action="{{ route('via_process.update', $via_process->id_via) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Via Process</label>
                <input type="text" name="via_process_name" value="{{ old('via_process_name', $via_process->via_process_name) }}" class="rounded-lg text-gray-900 border-admin-green p-4 bg-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
            </div>
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Price</label>
                <input type="number" name="via_process_price" value="{{ old('via_process_price', $via_process->via_process_price) }}" class="rounded-lg text-gray-900 border-admin-green p-4 bg-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
            </div>
            <div class="grid place-items-end ">
                <button type="submit" class="button-green-admin">
                    <i class="fas fa-save me-1"></i>
                    Save
                </button>
            </div>
        </div>
    </form>
</div>

@endsection