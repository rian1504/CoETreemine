@extends('layouts.admin')

@section('title', 'CoE Treemine | Portfolio Category')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('category.index') }}" class="text-admin-green">Portfolio Category</a>
    </div>
    <!-- page -->
    <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('category.create') }} " class="button-blue">
                <i class="fas fa-plus me-1"></i>Add
            </a>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @forelse ($datas as $index => $data)
            <div class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="relative inline-block ">
                        <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="Category Image" class=" max-h-32 w-60 object-cover object-center rounded-md">
                    </div>
                    <h5 class="text-1xl font-bold tracking-tight text-gray-900 dark:text-white mt-2">
                        {{ $data->category_name }}
                    </h5>
                    <div class="flex justify-between gap-4 mt-4">
                        <a href="{{ route('category.edit', $data->id_category) }}" class="button-yellow">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                        <div>
                            <form action="{{ route('category.destroy', $data->id_category) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-red"><i class="fas fa-trash me-1"></i>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                    No data
                </td>
            </tr>
            @endforelse
        </div>
    </div>
</div>
@endsection