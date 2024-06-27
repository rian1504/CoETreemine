@extends('layouts.admin')

@section('title', 'CoE Treemine | Prototype')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('prototype.index') }}" class="text-admin-green">Prototype</a>
    </div>

    <div class="min-h-[450px] bg-white rounded-sm px-10 py-6">
        <div class="pb-4 flex flex-row justify-between">
            <select id="prototype" name="prototype" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500">
                <option selected value="Board" disabled hidden>Choose a Prototype</option>
                @foreach ($dataSelect as $item)
                <option value="{{ $item }}" {{ session('select') == $item ? 'selected' : '' }}>
                    {{ $item }}
                </option>
                @endforeach
            </select>
            <div id="addButtonContainer">
                <a id="addButton" href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</a>
            </div>
        </div>
        <!-- table -->
        <!-- board type -->
        <div id="boardTypeTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataBoard'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->board_type_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->board_type_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('board_type.edit', $data->id_board) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('board_type.destroy', $data->id_board) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- route process -->
        <div id="routeProcessTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataRouteProcess'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->route_process_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('route_process.edit', $data->id_route) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('route_process.destroy', $data->id_route) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- fr4 -->
        <div id="fr4Table" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataFr4'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->fr4_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('fr4.edit', $data->id_fr4) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('fr4.destroy', $data->id_fr4) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataFr4']->links() }}
        </div>

        <!-- thickness -->
        <div id="thicknessTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Layer Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataThickness'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->thickness_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->thickness_price, 0, '', '.') }}
                        </td>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->prototype_layer->layer_name }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('thickness.edit', $data->id_thickness) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('thickness.destroy', $data->id_thickness) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataThickness']->links() }}
        </div>

        <!-- layer -->
        <div id="layerTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataLayer'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->layer_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->layer_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('layer.edit', $data->id_layer) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('layer.destroy', $data->id_layer) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- inner cooper -->
        <div id="innerCooperTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataInnerCooper'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->inner_cooper_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->inner_cooper_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('inner_cooper.edit', $data->id_inner_cooper) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('inner_cooper.destroy', $data->id_inner_cooper) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- finished cooper -->
        <div id="finishedCooperTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataFinishedCooper'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->finished_cooper_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->finished_cooper_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('finished_cooper.edit', $data->id_finished_cooper) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('finished_cooper.destroy', $data->id_finished_cooper) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- cooper layer -->
        <div id="cooperLayerTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataCooperLayer'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->cooper_layer_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('cooper_layer.edit', $data->id_cooper_layer) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('cooper_layer.destroy', $data->id_cooper_layer) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataCooperLayer']->links() }}
        </div>

        <!-- track -->
        <div id="trackTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataTrack'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->track_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->track_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('track.edit', $data->id_track) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('track.destroy', $data->id_track) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataTrack']->links() }}
        </div>

        <!-- hole -->
        <div id="holeTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataHole'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->hole_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->hole_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('hole.edit', $data->id_hole) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('hole.destroy', $data->id_hole) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- SOLDER -->
        <div id="solderTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataSolder'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->solder_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->solder_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('solder.edit', $data->id_solder) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('solder.destroy', $data->id_solder) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- silk -->
        <div id="silkTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataSilk'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->silk_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->silk_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('silk.edit', $data->id_silk) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('silk.destroy', $data->id_silk) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- surface -->
        <div id="surfaceTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataSurface'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->surface_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->surface_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('surface.edit', $data->id_surface) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('surface.destroy', $data->id_surface) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- via process -->
        <div id="viaProcessTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataViaProcess'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->via_process_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->via_process_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('via_process.edit', $data->id_via) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('via_process.destroy', $data->id_via) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
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

        <!-- material -->
        <div id="materialTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Picture
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataMaterial'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->material_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <img class="max-h-32 max-w-32 object-cover dark:shadow-gray-800" src="{{ asset('/storage/assets/images/material/' . $data->material_picture) }}" alt="Material Picture">
                        </td>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->material_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('material.edit', $data->id_material) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('material.destroy', $data->id_material) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataMaterial']->links() }}
        </div>

        <!-- SoldermaskLayer1 -->
        <div id="solderMaskLayer1Table" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataSoldermaskLayer1'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->soldermask_layer1_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('soldermask_layer1.edit', $data->id_soldermask_layer1) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('soldermask_layer1.destroy', $data->id_soldermask_layer1) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataSoldermaskLayer1']->links() }}
        </div>

        <!-- silkscreen_layer1 -->
        <div id="silkScreenLayer1Table" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPrototype['dataSilkscreenLayer1'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->silkscreen_layer1_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('silkscreen_layer1.edit', $data->id_silkscreen_layer1) }}" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('silkscreen_layer1.destroy', $data->id_silkscreen_layer1) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-5 py-2 text-sm
                                            font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800
                                            focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600
                                            dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataPrototype['dataSilkscreenLayer1']->links() }}
        </div>
    </div>
</div>


<script>
    // show table
    document.getElementById('prototype').addEventListener('change', function() {
        const value = this.value;
        document.getElementById('boardTypeTable').classList.add('hidden');
        document.getElementById('routeProcessTable').classList.add('hidden');
        document.getElementById('fr4Table').classList.add('hidden');
        document.getElementById('thicknessTable').classList.add('hidden');
        document.getElementById('layerTable').classList.add('hidden');
        document.getElementById('innerCooperTable').classList.add('hidden');
        document.getElementById('finishedCooperTable').classList.add('hidden');
        document.getElementById('cooperLayerTable').classList.add('hidden');
        document.getElementById('trackTable').classList.add('hidden');
        document.getElementById('holeTable').classList.add('hidden');
        document.getElementById('solderTable').classList.add('hidden');
        document.getElementById('silkTable').classList.add('hidden');
        document.getElementById('surfaceTable').classList.add('hidden');
        document.getElementById('viaProcessTable').classList.add('hidden');
        document.getElementById('materialTable').classList.add('hidden');
        document.getElementById('solderMaskLayer1Table').classList.add('hidden');
        document.getElementById('silkScreenLayer1Table').classList.add('hidden');

        if (value === 'Board') {
            document.getElementById('boardTypeTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('board_type.create') }}");
        } else if (value === 'Route Process') {
            document.getElementById('routeProcessTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('route_process.create') }}");
        } else if (value === 'Fr4') {
            document.getElementById('fr4Table').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('fr4.create') }}");
        } else if (value === 'Thickness') {
            document.getElementById('thicknessTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('thickness.create') }}");
        } else if (value === 'Layer') {
            document.getElementById('layerTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('layer.create') }}");
        } else if (value === 'Inner Cooper') {
            document.getElementById('innerCooperTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('inner_cooper.create') }}");
        } else if (value === 'Finished Cooper') {
            document.getElementById('finishedCooperTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('finished_cooper.create') }}");
        } else if (value === 'Cooper Layer') {
            document.getElementById('cooperLayerTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('cooper_layer.create') }}");
        } else if (value === 'Track') {
            document.getElementById('trackTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('track.create') }}");
        } else if (value === 'Hole') {
            document.getElementById('holeTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('hole.create') }}");
        } else if (value === 'Solder') {
            document.getElementById('solderTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('solder.create') }}");
        } else if (value === 'Silk') {
            document.getElementById('silkTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('silk.create') }}");
        } else if (value === 'Surface') {
            document.getElementById('surfaceTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('surface.create') }}");
        } else if (value === 'Via Process') {
            document.getElementById('viaProcessTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('via_process.create') }}");
        } else if (value === 'Material') {
            document.getElementById('materialTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('material.create') }}");
        } else if (value === 'Soldermask Layer1') {
            document.getElementById('solderMaskLayer1Table').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('soldermask_layer1.create') }}");
        } else if (value === 'Silkscreen Layer1') {
            document.getElementById('silkScreenLayer1Table').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('silkscreen_layer1.create') }}");
        }
    });

    // Check if there's a selected value, if not, show the boardTypeTable by default
    const selectedValue = document.getElementById('prototype').value;
    if (!selectedValue) {
        document.getElementById('boardTypeTable').classList.remove('hidden');
    } else {
        // Optional: Trigger the change event to show the selected table on page load if there's a selected value
        document.getElementById('prototype').dispatchEvent(new Event('change'));
    }
</script>
@endsection