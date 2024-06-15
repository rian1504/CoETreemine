@extends('layouts.admin')

@section('title', 'CoE Treemine | Product on Progress')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('progress.index') }}" class="text-admin-900">Product on Progress</a>
    </div>
    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
        <div class="pb-4 flex flex-row justify-between">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search for items">
            </div>
        </div>
        @session('success')
        {{ session('success') }}
        @endsession
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Buyer Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Buyer Phone
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Address Destination
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Total Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Payment Proof
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Detail
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $index => $data)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->user->name }}
                        </th>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            {{ $data->user->telp }}
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            {{ $data->address }}
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            Rp{{ number_format($data->total_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            <img src="{{ asset('/storage/assets/images/payment/' . $data->payment_proof) }}" alt="" width="100" height="100">
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            <a href="{{ route('progress.show', $data->id_order) }}">View Detail</a>
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap truncate">
                            <form action="{{ route('progress.done', $data->id_order) }}" method="POST" onsubmit="return confirm('Are you sure want to done this order?')">
                                @csrf
                                <label for="">Shipping Method</label>
                                <input type="text" name="shipping_method">
                                <label for="">No Resi</label>
                                <input type="text" name="no_resi">
                                <button type="submit">Submit</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection