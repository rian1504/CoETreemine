@extends('layouts.admin')

@section('title', 'CoE Treemine | Prototype Material')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="">Prototype</a>
        <p>></p>
        <a href="">Material</a>
        <p>></p>
        <a href="" class="text-admin-900">Edit</a>
    </div>
    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Material</label>
            <input type="text" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product name">
        </div>
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Price</label>
            <input type="number" class="rounded-lg text-gray-900 border-admin-900 p-4 bg-admin-100 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input a product price">
        </div>
        <div class="flex flex-col mt-2 mb-6">
            <label for="" class="font-semibold mb-2">Image</label>
            <div class="relative flex items-center">
                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="fileInput">
                <input type="text" class="w-full h-14 p-4 border border-admin-900 rounded-l-lg focus:outline-none" placeholder="No file chosen" id="fileText" readonly>
                <button class="h-14 w-52 bg-admin-900 text-white rounded-r-lg">
                    Choose File
            </div>
        </div>
        <div>
            <img class="h-auto max-w-52 rounded-lg shadow-xl dark:shadow-gray-800" id="imagePreview">
        </div>
        <div class="grid place-items-end ">
            <a href="#" class="inline-flex items-center px-5 py-2 text-lg font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Save
            </a>
        </div>
    </div>
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