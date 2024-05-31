@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div class="flex items-center justify-between mb-4">
    <div class="flex items-center">
        <i class="fas fa-cogs text-2xl mr-2"></i>
        <h2 class="text-lg font-bold">Custom Assembly</h2>
    </div>
</div>

<div>
    <div>
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/admin"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-400 dark:hover:text-white">Dashboard
                </a>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Assembly</span>
                </div>
            </li>
        </ol>
    </div>


<form class="max-w-sm mt-5 grid-cols-2 ">
  <div class="grid-cols-2">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
    <option selected>.....</option>
    <option value="US">3flexible options</option>
    <option value="CA">Board type</option>
    <option value="FR">Assembly side(s)</option>
  </select>
</div>
<button type="button" class=" mt-5 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
</form>

    @endsection