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
            <div class="flex flex-row justify-between items-center gap-4">
                @forelse ($datas as $data)
                <a href="{{ route('buyer.portfolio.showCategory', $data->id_category) }}">
                    <div class="hover-effect flex flex-col justify-center items-center w-56 h-60 bg-white border border-custom-grey rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 my-8">
                        <div class="w-full h-full shadow-lg overflow-hidden bg-gray-100">
                            <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="Product Picture" class="image">
                        </div>
                        <div class="mx-6 my-6 md:my-6">
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white">{{ $data->category_name }}
                            </h1>
                        </div>
                    </div>
                </a>
                @empty
                <div class="flex flex-col justify-center items-center h-full py-10 mb-8">
                    <h1 class="text-2xl font-semibold text-gray-700 dark:text-white mb-8">No Data</h1>
                    <i class="fas fa-database text-gray-400 text-4xl"></i>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="py-8 px-8 bg-white rounded-lg border-t-2 border-buyer-green">
        <h1 class="font-extrabold text-gray-500 text-lg">Best Seller Product</h1>
        <div class="flex justify-center">
            <div class="flex flex-row justify-between items-center gap-4">
                @forelse ($datasBest as $data)
                <a href="{{ route('buyer.portfolio.showPortfolio', $data->id_portfolio) }}">
                    <div class=" hover-effect flex flex-col justify-center items-center w-56 h-60 bg-white border border-custom-grey rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 my-8">
                        <div class="w-full h-full shadow-lg overflow-hidden bg-gray-100">
                            <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="Product Picture" class="image">
                        </div>
                        <div class="mx-6 my-6 md:my-6">
                            <h1 class="text-sm text-gray-900 dark:text-white">{{ $data->portfolio_name }}</h1>
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white">Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>
                        </div>
                    </div>
                </a>
                @empty
                <div class="flex flex-col justify-center items-center h-full py-10 mb-4">
                    <h1 class="text-2xl font-semibold text-gray-700 dark:text-white mb-2">No Data</h1>
                    <i class="fas fa-database text-gray-400 text-4xl"></i>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection