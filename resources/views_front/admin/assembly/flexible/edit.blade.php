@extends('layouts.admin')

@section('title', 'CoE Treemine | Flexible Options')

@section('content')

    <div>
        <div class="my-4 flex flex-row gap-4">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <p>></p>
            <a href="{{ route('assembly.index') }}">Assembly</a>
            <p>></p>
            <a href="{{ route('assembly.index') }}">Flexible</a>
            <p>></p>
            <p class="text-admin-900">Edit</p>
        </div>

        <form action="{{ route('flexible.update', $flexible->id_flexible) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
                <div class="flex flex-col mt-2 mb-6">
                    <label for="" class="font-semibold mb-2">Flexible Options</label>
                    <input type="text" name="flexible_name" value="{{ old('flexible_name', $flexible->flexible_name) }}">
                    <label for="" class="font-semibold mb-2">Flexible Options</label>
                    <input type="number" name="flexible_price"
                        value="{{ old('flexible_price', $flexible->flexible_price) }}">
                </div>
                <div class="grid place-items-end ">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>

@endsection
