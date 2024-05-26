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
                    <a href="{{ route('prototype.index') }}">prototype</a>
                    <a href="{{ route('assembly.index') }}">assembly</a>
                    <a href="{{ route('review_file.index') }}">review file</a>
                    {{-- <a href="{{ route('review_payment.index') }}">review payment</a>
                    <a href="{{ route('history.index') }}">history</a> --}}
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
                    Data Order = {{ $data['dataOrder'] }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
