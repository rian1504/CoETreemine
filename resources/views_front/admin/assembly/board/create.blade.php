@extends('layouts.admin')

@section('title', 'CoE Treemine | Board Type')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}">Assembly</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}">Boards</a>
        <p>></p>
        <p class="text-admin-green">Create</p>
    </div>

    <form action="{{ route('board.store') }}" method="POST">
        @csrf
        <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
            <div class="flex flex-col mt-2 mb-6">
                <label class="font-semibold mb-2">Board Type</label>
                <input type="text" name="board_type_name" value="{{ old('board_type_name') }}">
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