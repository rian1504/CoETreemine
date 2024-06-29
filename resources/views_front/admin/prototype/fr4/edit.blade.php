@extends('layouts.admin')

@section('title', 'CoE Treemine | FR4-TG')

@section('content')
<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Prototype</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Cooper Layer</a>
        <p>></p>
        <p class="text-admin-green">Edit</p>
    </div>

    <form action="{{ route('fr4.update', $fr4->id_fr4) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">FR4-TG</label>
                <input type="text" name="fr4_name" value="{{ old('fr4_name', $fr4->fr4_name) }}" class="rounded-lg text-gray-900 border-admin-green p-4 bg-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
            </div>
            <div>
                <img class="h-auto max-w-52 rounded-lg shadow-xl dark:shadow-gray-800" id="imagePreview">
            </div>
            <div class="grid place-items-end ">
                <button type="submit" class="button-green-admin">
                    <i class="fas fa-save me-1"></i>
                    Save
                </button>
            </div>
        </div>
    </form>
</div>

@endsection