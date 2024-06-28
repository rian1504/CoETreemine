@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Detail Product Portfolio')

@section('content')
    <div class="flex flex-col my-8 gap-8 mt-36 ">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="py-8 px-8 bg-white rounded-lg h-[400px] flex flex-col gap-4">
            <div
                class="px-3 py-1 bg-gray-400 w-20 flex justify-center items-center rounded-lg text-white text-sm hover:bg-gray-500">
                <a href="{{ route('cart.index') }}" rel="noopener noreferrer"><i class="fas fa-arrow-left me-1"></i>Back</a>
            </div>
            <div class="flex justify-between h-full gap-4">
                <div class="w-1/3 h-60 overflow-hidden rounded-lg shadow-lg bg-custom-grey">
                    <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}"
                        alt="Portfolio Picture" class="w-full h-full object-cover">
                </div>
                <!-- data -->
                <div class="w-1/3 h-[90%] overflow-y-auto p-4 bg-white dark:bg-gray-800 custom-scrollbar">
                    <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">Portfolio
                        Name</h1>
                    <h1 class="text-sm text-gray-700 dark:text-gray-300 mb-2">{{ $data->portfolio_name }}</h1>
                    <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">Portfolio
                        Price</h1>
                    <h1 class="text-sm text-gray-700 dark:text-gray-300 mb-2">
                        Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>
                    <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">Portfolio
                        Stock</h1>
                    <h1 class="text-sm text-gray-700 dark:text-gray-300 mb-2">Available: {{ $data->portfolio_stock }}</h1>
                    <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">Portfolio
                        Category</h1>
                    <h1 class="text-sm text-gray-700 dark:text-gray-300 mb-2">{{ $data->category->category_name }}</h1>
                </div>
                <!-- description box -->
                <div class="w-1/3 h-[90%] overflow-y-auto p-4 bg-white dark:bg-gray-800 custom-scrollbar">
                    <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">DESCRIPTION :
                    </h1>
                    <h1 class="text-sm text-gray-700 dark:text-gray-300">{{ $data->portfolio_description }}</h1>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-scrollbar {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .custom-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script>
        function syncInput() {
            const input1 = document.getElementById('input1');
            const input2 = document.getElementById('input2');
            input2.value = input1.value;
        }
    </script>
@endsection
