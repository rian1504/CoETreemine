@extends('layouts.admin')

@section('title', 'CoE Treemine | Assembly')

@section('content')

<div>
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <i class="fas fa-cogs text-2xl mr-2"></i>
            <h2 class="text-lg font-bold">Custom Assembly</h2>
        </div>
    </div>

    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}" class="text-admin-green">Assembly</a>
    </div>

    <div class="flex flex-row gap-4">
        <label for="assembly" class=" inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose</label>
        <select id="assembly" name="assembly" class=" max-w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
            <option disabled selected>Select Assembly</option>
            @foreach ($dataSelect as $item)
            <option value="{{ $item }}" {{ session('select') == $item ? 'selected' : '' }}>
                {{ $item }}
            </option>
            @endforeach
        </select>
    </div>

    <div class=" min-h-[450px] bg-white rounded-sm px-10 py-6">
        <div class="my-4 flex justify-end">
            <a href="/admin/assembly/board/create" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>
        </div>
    </div>

    <div class="flexible hidden">
        <h1>Flexible</h1>
        <a href="{{ route('flexible.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataAssembly['dataFlexible'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->flexible_name }}</td>
                    <td>Rp{{ number_format($data->flexible_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('flexible.edit', $data->id_flexible) }}">Edit</a>
                        <form action="{{ route('flexible.destroy', $data->id_flexible) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                        No data
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $dataAssembly['dataFlexible']->links() }}

    </div>

    <div class="board hidden">
        <h1>Board</h1>
        <a href="{{ route('board.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataAssembly['dataBoard'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->board_type_name }}</td>
                    <td>
                        <a href="{{ route('board.edit', $data->id_board) }}">Edit</a>
                        <form action="{{ route('board.destroy', $data->id_board) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                        No data
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $dataAssembly['dataBoard']->links() }}

    </div>

    <div class="side hidden">
        <h1>Side</h1>
        <a href="{{ route('side.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataAssembly['dataSide'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->side_name }}</td>
                    <td>Rp{{ number_format($data->side_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('side.edit', $data->id_side) }}">Edit</a>
                        <form action="{{ route('side.destroy', $data->id_side) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                        No data
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $dataAssembly['dataSide']->links() }}

    </div>

</div>
@endsection