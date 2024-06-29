@extends('layouts.admin')

@section('title', 'CoE Treemine | Assembly')

@section('content')

<div>
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <i class="fas fa-project-diagram text-2xl mr-2"></i>
            <h2 class="text-lg font-bold">Custom Prototype</h2>
        </div>
    </div>

    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <p class="text-admin-green">Prototype</p>
    </div>

    <div class=" flex flex-row gap-4">
        <label for="prototype" class=" inline-flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose</label>
        <select id="prototype" name="prototype" class=" max-w-44 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
            <option selected disabled>choose a prototype</option>
            @foreach ($dataSelect as $item)
            <option value="{{ $item }}" {{ session('select') == $item ? 'selected' : '' }}>
                {{ $item }}
            </option>
            @endforeach
        </select>
    </div>

    <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
        <div class="my-4 flex justify-end">
            <a href="/admin/prototype/board/create" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
            </a>
        </div>
    </div>

    {{-- BOARD TYPE --}}
    <div class="board hidden">
        <h1>Board</h1>
        <a href="{{ route('board_type.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataBoard'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->board_type_name }}</td>
                    <td>Rp{{ number_format($data->board_type_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('board_type.edit', $data->id_board) }}">Edit</a>
                        <form action="{{ route('board_type.destroy', $data->id_board) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataBoard']->links() }}

    </div>

    {{-- ROUTE PROCESS --}}
    <div class="route_process hidden">
        <h1>Route Process</h1>
        <a href="{{ route('route_process.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataRouteProcess'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->route_process_name }}</td>
                    <td>
                        <a href="{{ route('route_process.edit', $data->id_route) }}">Edit</a>
                        <form action="{{ route('route_process.destroy', $data->id_route) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataRouteProcess']->links() }}

    </div>

    {{-- FR4 --}}
    <div class="fr4 hidden">
        <h1>Fr4</h1>
        <a href="{{ route('fr4.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataFr4'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->fr4_name }}</td>
                    <td>
                        <a href="{{ route('fr4.edit', $data->id_fr4) }}">Edit</a>
                        <form action="{{ route('fr4.destroy', $data->id_fr4) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataFr4']->links() }}

    </div>

    {{-- THICKNESS --}}
    <div class="thickness hidden">
        <h1>Thickness</h1>
        <a href="{{ route('thickness.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Layer Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataThickness'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->thickness_name }}</td>
                    <td>Rp{{ number_format($data->thickness_price, 0, '', '.') }}</td>
                    <td>{{ $data->prototype_layer->layer_name }}</td>
                    <td>
                        <a href="{{ route('thickness.edit', $data->id_thickness) }}">Edit</a>
                        <form action="{{ route('thickness.destroy', $data->id_thickness) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataThickness']->links() }}

    </div>

    {{-- LAYER --}}
    <div class="layer hidden">
        <h1>Layer</h1>
        <a href="{{ route('layer.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataLayer'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->layer_name }}</td>
                    <td>Rp{{ number_format($data->layer_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('layer.edit', $data->id_layer) }}">Edit</a>
                        <form action="{{ route('layer.destroy', $data->id_layer) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataLayer']->links() }}

    </div>

    {{-- INNER COOPER --}}
    <div class="inner_cooper hidden">
        <h1>Inner Cooper</h1>
        <a href="{{ route('inner_cooper.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataInnerCooper'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->inner_cooper_name }}</td>
                    <td>Rp{{ number_format($data->inner_cooper_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('inner_cooper.edit', $data->id_inner_cooper) }}">Edit</a>
                        <form action="{{ route('inner_cooper.destroy', $data->id_inner_cooper) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataInnerCooper']->links() }}

    </div>

    {{-- FINISHED COOPER --}}
    <div class="finished_cooper hidden">
        <h1>Finished Cooper</h1>
        <a href="{{ route('finished_cooper.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataFinishedCooper'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->finished_cooper_name }}</td>
                    <td>Rp{{ number_format($data->finished_cooper_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('finished_cooper.edit', $data->id_finished_cooper) }}">Edit</a>
                        <form action="{{ route('finished_cooper.destroy', $data->id_finished_cooper) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataFinishedCooper']->links() }}

    </div>

    {{-- COOPER LAYER --}}
    <div class="cooper_layer hidden">
        <h1>Cooper Layer</h1>
        <a href="{{ route('cooper_layer.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataCooperLayer'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->cooper_layer_name }}</td>
                    <td>
                        <a href="{{ route('cooper_layer.edit', $data->id_cooper_layer) }}">Edit</a>
                        <form action="{{ route('cooper_layer.destroy', $data->id_cooper_layer) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataCooperLayer']->links() }}

    </div>

    {{-- TRACK --}}
    <div class="track hidden">
        <h1>Track</h1>
        <a href="{{ route('track.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataTrack'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->track_name }}</td>
                    <td>Rp{{ number_format($data->track_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('track.edit', $data->id_track) }}">Edit</a>
                        <form action="{{ route('track.destroy', $data->id_track) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataTrack']->links() }}

    </div>

    {{-- HOLE --}}
    <div class="hole hidden">
        <h1>Hole</h1>
        <a href="{{ route('hole.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>

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
                @forelse ($dataPrototype['dataHole'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->hole_name }}</td>
                    <td>Rp{{ number_format($data->hole_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('hole.edit', $data->id_hole) }}">Edit</a>
                        <form action="{{ route('hole.destroy', $data->id_hole) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataHole']->links() }}

    </div>

    {{-- SOLDER --}}
    <div class="solder hidden">
        <h1>Solder</h1>
        <a href="{{ route('solder.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

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
                @forelse ($dataPrototype['dataSolder'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->solder_name }}</td>
                    <td>Rp{{ number_format($data->solder_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('solder.edit', $data->id_solder) }}">Edit</a>
                        <form action="{{ route('solder.destroy', $data->id_solder) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataSolder']->links() }}

    </div>

    {{-- SILK --}}
    <div class="silk hidden">
        <h1>Silk</h1>
        <a href="{{ route('silk.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

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
                @forelse ($dataPrototype['dataSilk'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->silk_name }}</td>
                    <td>Rp{{ number_format($data->silk_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('silk.edit', $data->id_silk) }}">Edit</a>
                        <form action="{{ route('silk.destroy', $data->id_silk) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataSilk']->links() }}

    </div>

    {{-- SURFACE --}}
    <div class="surface hidden">
        <h1>Surface</h1>
        <a href="{{ route('surface.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

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
                @forelse ($dataPrototype['dataSurface'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->surface_name }}</td>
                    <td>Rp{{ number_format($data->surface_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('surface.edit', $data->id_surface) }}">Edit</a>
                        <form action="{{ route('surface.destroy', $data->id_surface) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataSurface']->links() }}

    </div>

    {{-- VIA PROCESS --}}
    <div class="via_process hidden">
        <h1>Via Process</h1>
        <a href="{{ route('via_process.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

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
                @forelse ($dataPrototype['dataViaProcess'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->via_process_name }}</td>
                    <td>Rp{{ number_format($data->via_process_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('via_process.edit', $data->id_via) }}">Edit</a>
                        <form action="{{ route('via_process.destroy', $data->id_via) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataViaProcess']->links() }}

    </div>

    {{-- MATERIAL --}}
    <div class="material hidden">
        <h1>Material</h1>
        <a href="{{ route('material.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Picture</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataMaterial'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->material_name }}</td>
                    <td>
                        <img src="{{ asset('/storage/assets/images/material/' . $data->material_picture) }}" alt="" width="100" height="100">
                    </td>
                    <td>Rp{{ number_format($data->material_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('material.edit', $data->id_material) }}">Edit</a>
                        <form action="{{ route('material.destroy', $data->id_material) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataMaterial']->links() }}

    </div>

    {{-- SOLDERMASK LAYER 1 --}}
    <div class="soldermask_layer1 hidden">
        <h1>Soldermask Layer 1</h1>
        <a href="{{ route('soldermask_layer1.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataSoldermaskLayer1'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->soldermask_layer1_name }}</td>
                    <td>
                        <a href="{{ route('soldermask_layer1.edit', $data->id_soldermask_layer1) }}">Edit</a>
                        <form action="{{ route('soldermask_layer1.destroy', $data->id_soldermask_layer1) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataSoldermaskLayer1']->links() }}

    </div>

    {{-- SILKSCREEN LAYER 1 --}}
    <div class="silkscreen_layer1 hidden">
        <h1>Silkscreen Layer1</h1>
        <a href="{{ route('silkscreen_layer1.create') }}" class=" mt-5 max-w-20 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        </a>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPrototype['dataSilkscreenLayer1'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->silkscreen_layer1_name }}</td>
                    <td>
                        <a href="{{ route('silkscreen_layer1.edit', $data->id_silkscreen_layer1) }}">Edit</a>
                        <form action="{{ route('silkscreen_layer1.destroy', $data->id_silkscreen_layer1) }}" onsubmit="return confirm('Are you sure?')" method="POST">
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
        {{ $dataPrototype['dataSilkscreenLayer1']->links() }}

    </div>
</div>
@endsection