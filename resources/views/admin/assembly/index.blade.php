@extends('layouts.admin')

@section('title', 'CoE Treemine | Assembly')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <a href="{{ route('assembly.index') }}" class="text-admin-green">Assembly</a>
    </div>

    <div class="min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
        <div class="pb-4 flex flex-row justify-between">
            <select id="assembly" name="assembly" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500">
                <option selected value="Flexible" disabled hidden>Choose a Assembly</option>
                @foreach ($dataSelect as $item)
                <option value="{{ $item }}" {{ session('select') == $item ? 'selected' : '' }}>
                    {{ $item }}
                </option>
                @endforeach
            </select>
            <div id="addButtonContainer">
                <a id="addButton" href="#" class="button-blue"><i class="fas fa-plus me-1"></i>Add</a>
            </div>
        </div>
        <!-- table -->
        <!-- flexible -->
        <div id="flexibleTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    @forelse ($dataAssembly['dataFlexible'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->flexible_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->flexible_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('flexible.edit', $data->id_flexible) }}" class="button-yellow">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('flexible.destroy', $data->id_flexible) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button-red">
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
            {{ $dataAssembly['dataFlexible']->links() }}
        </div>

        <!-- board -->
        <div id="boardTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    @forelse ($dataAssembly['dataBoard'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->board_type_name }}
                        </th>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('board.edit', $data->id_board) }}" class="button-yellow">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('board.destroy', $data->id_board) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button-red">
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
            {{ $dataAssembly['dataBoard']->links() }}
        </div>

        <!-- side -->
        <div id="sideTable" class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    @forelse ($dataAssembly['dataSide'] as $index => $data)
                    <tr>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-3 whitespace-nowrap">
                            {{ $data->side_name }}
                        </th>
                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                            Rp{{ number_format($data->side_price, 0, '', '.') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('side.edit', $data->id_side) }}" class="button-yellow">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('side.destroy', $data->id_side) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button-red">
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
            {{ $dataAssembly['dataSide']->links() }}
        </div>
    </div>
</div>

<script>
    // show table
    document.getElementById('assembly').addEventListener('change', function() {
        const value = this.value;
        document.getElementById('flexibleTable').classList.add('hidden');
        document.getElementById('boardTable').classList.add('hidden');
        document.getElementById('sideTable').classList.add('hidden');

        if (value === 'Flexible') {
            document.getElementById('flexibleTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('flexible.create') }}");
        } else if (value === 'Board') {
            document.getElementById('boardTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('board.create') }}");
        } else if (value === 'Side') {
            document.getElementById('sideTable').classList.remove('hidden');
            document.getElementById('addButton').setAttribute('href', "{{ route('side.create') }}");
        }
    });

    // Check if there's a selected value, if not, show the boardTypeTable by default
    const selectedValue = document.getElementById('assembly').value;
    if (!selectedValue) {
        document.getElementById('flexibleTable').classList.remove('hidden');
    } else {
        // Optional: Trigger the change event to show the selected table on page load if there's a selected value
        document.getElementById('assembly').dispatchEvent(new Event('change'));
    }
</script>
@endsection