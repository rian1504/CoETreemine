@extends('layouts.admin')

@section('title', 'CoE Treemine | Material')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Prototype</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}">Material</a>
        <p>></p>
        <p class="text-admin-green">Create</p>
    </div>

    <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Material</label>
                <input type="text" name="material_name" value="{{ old('material_name') }}" class="rounded-lg text-gray-900 border-admin-green p-4 bg-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
            </div>
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Price</label>
                <input type="number" name="material_price" value="{{ old('material_price') }}" class="rounded-lg text-gray-900 border-admin-green p-4 bg-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
            </div>
            <div class="flex flex-col mt-2 mb-6">
                <label for="" class="font-semibold mb-2">Image</label>
                <div class="relative flex items-center">
                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="fileInput" name="material_picture">
                    <input type="text" class="w-full h-14 p-4 border border-admin-green rounded-l-lg focus:outline-none" placeholder="No file chosen" id="fileText" readonly>
                    <button class="h-14 w-52 bg-admin-green text-white rounded-r-lg">
                        Choose File
                </div>
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

<script>
    document.getElementById('fileInput').addEventListener('change', function() {
        var fileInput = this;
        var fileName = fileInput.files[0].name;
        var fileText = document.getElementById('fileText');
        var imagePreview = document.getElementById('imagePreview');

        fileText.value = fileName;

        var reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
        }
        reader.readAsDataURL(fileInput.files[0]);
    });
</script>

@endsection