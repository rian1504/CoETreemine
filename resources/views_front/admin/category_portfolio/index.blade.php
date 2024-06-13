@extends('layouts.admin')

@section('title', 'CoE Treemine | Portfolio Category')

@section('content')

    <div>
        <div class="my-4 flex flex-row gap-4">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <p>></p>
            <a href="{{ route('category.index') }}" class="text-admin-900">Portfolio Category</a>
        </div>
        <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
            <a href="{{ route('category.create') }} ">
                <button type="button"
                    class="max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
            </a>
            <div class="grid grid-cols-3 gap-4 mb-4">
                @forelse ($datas as $index => $data)
                    <div
                        class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center justify-center p-5">
                            <div class="relative inline-block my-4">
                                <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}"
                                    alt="" width="100" height="100">
                            </div>
                            <h5 class="text-1xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <td>{{ $data->category_name }}</td>
                            </h5>
                            <div class="flex flex-row gap-4 my-2">
                                <td class="px-6 py-4 inline-flex items-center  ">
                                    <a href="{{ route('category.edit', $data->id_category) }}"
                                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                        Edit
                                    </a>
                                    <form action="{{ route('category.destroy', $data->id_category) }}"
                                        onsubmit="return confirm('Are you sure?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                    </form>
                                </td>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Tidak ada data</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
