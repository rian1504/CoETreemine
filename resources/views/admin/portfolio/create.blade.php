@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/portfolio">Portfolio</a>
        <p>></p>
        <a href="/portfolio/create" class="text-admin-900">Create</a>
    </div>
    <div class=" min-h-screen bg-white rounded-sm px-10 py-6">
        <div class="flex flex-col my-2">
            <label for="" class="font-semibold mb-2">Name</label>
            <input type="text" class="rounded-xl border-admin-900 h-12" placeholder="Input Product Name">
        </div>
    </div>
</div>

@endsection