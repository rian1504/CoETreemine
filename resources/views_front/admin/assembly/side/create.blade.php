@extends('layouts.admin')

@section('title', 'CoE Treemine | Assembly Side(s)')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}">Assembly</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}">Assembly Side(s)</a>
        <p>></p>
        <p class="text-admin-900">Create</p>
    </div>

    <form action="{{ route('side.store') }}" method="POST">
        @csrf
        <div class=" min-h-[450px] bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Assembly Side Name</label>
                <input type="text" name="side_name" value="{{ old('side_name') }}">
                <label for="" class="font-semibold mb-2">Assembly Side Price</label>
                <input type="number" name="side_price" value="{{ old('side_price') }}">
            </div>
            <div class="grid place-items-end ">
                <button type="submit" class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>

@endsection