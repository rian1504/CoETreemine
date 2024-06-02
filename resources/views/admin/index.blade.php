<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Dashboard Admin
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <a href="{{ route('category.index') }}">Category</a>
                    <a href="{{ route('portfolio.index') }}">Portfolio</a>
                    <a href="{{ route('prototype.index') }}">Prototype</a>
                    <a href="{{ route('assembly.index') }}">Assembly</a>
                    <a href="{{ route('review_file.index') }}">Review File</a>
                    <a href="{{ route('review_payment.index') }}">Review Payment</a>
                    <a href="{{ route('history.cart_custom') }}">History Cart Custom</a>
                    <a href="{{ route('history.order') }}">History Order</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Data Category = {{ $data['dataCategory'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Portfolio = {{ $data['dataPortfolio'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Custom Assembly = {{ $data['dataCustomAssembly'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Custom Prototype = {{ $data['dataCustomPrototype'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Review File = {{ $data['dataReviewFile'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Review Payment = {{ $data['dataReviewPayment'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Order History = {{ $data['dataOrderHistory'] }}
                </div>
                <div class="p-6 text-gray-900">
                    Data Cart Custom History = {{ $data['dataCartCustomHistory'] }}
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
