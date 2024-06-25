@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Product Portfolio')

@section('carousel')
<div class="mt-36">
    <div class="h-32 md:h-24 rounded-lg bg-white flex items-center justify-center">
        <h1 class="text-center font-extrabold text-black-900 text-2xl">{{ $datas->category_name }}</h1>
    </div>
</div>
@endsection

@section('content')

<div class="flex flex-col my-8 gap-8">
    <div class="py-4 px-8 bg-white rounded-lg">
        <div class="flex justify-center">
            <div class="inline-grid grid-cols-5 gap-4">
                @forelse ($datas->portfolio as $data)
                <a href="{{ route('buyer.portfolio.showPortfolio', $data->id_portfolio) }}">
                    <div class="w-56 h-60 bg-white border border-grays-700 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 my-8">
                        <div class="flex px-4 pt-4 justify-center ">
                            <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="Product Picture" class="w-40 h-40 object-cover">
                        </div>
                        <div class="my-4 md:my-4">
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white text-center">{{ $data->portfolio_name }}</h1>
                        </div>
                    </div>
                </a>
                @empty
                <h1>No Data</h1>
                @endforelse
            </div>
        </div>
    </div>
    <div class="py-8 px-8 bg-white rounded-lg border-t-2 border-greens-900">
        <h1 class="font-extrabold text-gray-500 text-lg">Another Category Product</h1>
    </div>
</div>

@endsection