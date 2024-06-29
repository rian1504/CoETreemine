@extends('layouts.admin')

@section('title', 'CoE Treemine | Portfolio Category')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('category.index') }}" class="text-admin-green">Portfolio Category</a>
    </div>
    <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
        <a href="{{ route('category.create') }} ">
            <button type="button" class="max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
        </a>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @forelse ($datas as $index => $data)
            <div class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="relative inline-block my-4">
                        <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="" width="100" height="100">
                    </div>
                    <h5 class="text-1xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <td>{{ $data->category_name }}</td>
                    </h5>
                    <div class="flex flex-row gap-4 my-2">
                        <td class="px-6 py-4 inline-flex items-center  ">
                            <a href="{{ route('category.edit', $data->id_category) }}" class="button-yellow">
                                Edit
                            </a>
                            <form action="{{ route('category.destroy', $data->id_category) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center button-red>Delete</button>
                            </form>
                        </td>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan=" 4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                                    <div class="flex flex-col justify-center items-center h-full py-10">
                                        <h1 class="text-2xl font-semibold text-gray-700 dark:text-white mb-2">No Data</h1>
                                        <i class="fas fa-database text-gray-400 text-4xl"></i>
                                    </div>
                        </td>
                        </tr>
                        @endforelse
                    </div>
                </div>
            </div>
            @endsection