@extends('layouts.admin')

@section('title', 'CoE Treemine | Portfolio')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('portfolio.index') }}" class="text-admin-900">Portfolio</a>
    </div>

    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
        <div class="pb-4 flex flex-row justify-between">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search for items">
            </div>
            <a href="{{ route('portfolio.create') }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add
            </a>
        </div>
        <!-- table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Picture
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $index => $data)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            <div class="relative group">
                                <p>{{ $data->portfolio_name }}</p>
                            </div>
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->portfolio_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            {{ $data->portfolio_description }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            {{ $data->portfolio_stock }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <img class="max-h-32 max-w-32 object-cover dark:shadow-gray-800" src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="{{ $data->portfolio_picture }}">
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            {{ $data->category->category_name }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('portfolio.edit', $data->id_portfolio) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('portfolio.destroy', $data->id_portfolio) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-6 py-3 whitespace-nowrap text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $datas->links() }}
        </div>
    </div>
</div>
@endsection