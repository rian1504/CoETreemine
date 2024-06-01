@extends('layouts.admin')

@section('title', 'CoE Treemine | Assembly')

@section('content')

<div class="flex items-center justify-between mb-4">
    <div class="flex items-center">
        <i class="fas fa-cogs text-2xl mr-2"></i>
        <h2 class="text-lg font-bold">Custom Assembly</h2>
    </div>
</div>

<div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/portfolio" class="text-admin-900">Assembly</a>
    </div>

<form class="max-w-sm mt-5 grid-cols-2 ">
  <div class="grid-cols-2">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
    <option selected></option>
    <option value="US">3flexible options</option>
    <option value="CA">Board type</option>
    <option value="FR">Assembly side(s)</option>
  </select>
</div>
<button type="button" class=" mt-5 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
</form>

    @endsection