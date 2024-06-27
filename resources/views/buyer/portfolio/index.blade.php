@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Product')

@section('carousel')
<div class="mt-36">
    @include('components.carousel')
</div>
@endsection

@section('content')

<div class="flex flex-col my-8 gap-8">
    <div class="py-8 px-8 bg-white rounded-lg">
        <h1 class="text-center font-extrabold text-black-900 text-2xl">Category Product</h1>
        <div class="flex justify-center">
            <div class="inline-grid grid-cols-5 gap-4">
                @forelse ($datas as $data)
                <a href="{{ route('buyer.portfolio.showCategory', $data->id_category) }}">
                    <div class="hover-effect flex flex-col justify-center items-center w-56 h-60 bg-white border border-custom-grey rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 my-8">
                        <div class="w-full h-full shadow-lg overflow-hidden bg-gray-100">
                            <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="Product Picture" class="w-full h-full object-cover">
                        </div>
                        <div class="mx-6 my-6 md:my-6">
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white">{{ $data->category_name }}
                            </h1>
                        </div>
                    </div>
                </a>
                @empty
                <h1>No Data</h1>
                @endforelse
            </div>
        </div>
    </div>
    <div class="py-8 px-8 bg-white rounded-lg border-t-2 border-buyer-green">
        <h1 class="font-extrabold text-gray-500 text-lg">Best Seller Product</h1>
        <div class="flex justify-center">
            <div class="inline-grid grid-cols-5 gap-4">
                @forelse ($datasBest as $data)
                <a href="{{ route('buyer.portfolio.showCategory', $data->id_category) }}">
                    <div class=" hover-effect flex flex-col justify-center items-center w-56 h-60 bg-white border border-custom-grey rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 my-8">
                        <div class="w-full h-full shadow-lg overflow-hidden bg-gray-100">
                            <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="Product Picture" class="w-full h-full object-cover">
                        </div>
                        <div class="mx-6 my-6 md:my-6">
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white">{{ $data->category_name }}
                            </h1>
                        </div>
                    </div>
                </a>
                @empty
                <h1>No Data</h1>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection