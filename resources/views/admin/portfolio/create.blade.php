@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <h1>Dashboard</h1>
        <h2>></h2>
        <h1>Portfolio</h1>
        <h2>></h2>
        <h3 class="text-admin-900">Create</h3>
    </div>
    <div class="min-h-screen bg-white rounded-sm px-10 py-6">
        <div class="flex flex-col my-2">
            <label for="" class="font-semibold mb-2">Name</label>
            <input type="text" class="rounded-xl border-admin-900 h-12" placeholder="Input Product Name">
        </div>
    </div>
</div>

@endsection