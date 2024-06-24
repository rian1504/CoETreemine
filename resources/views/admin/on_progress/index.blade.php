@extends('layouts.admin')

@section('title', 'CoE Treemine | Product on Progress')

@section('content')

    <div>
        <div class="my-4 flex flex-row gap-4">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <p>></p>
            <a href="{{ route('progress.index') }}" class="text-admin-900">Product on Progress</a>
        </div>

        <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
            <div class="pb-4 flex flex-row justify-between">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Search for items">
                </div>
            </div>

            @session('success')
                {{ session('success') }}
            @endsession

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                NO
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Buyer Name
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Buyer Phone
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Address Destination
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Total Price
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Payment Proof
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Detail
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $index => $data)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $index + 1 }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->user->name }}
                                </th>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    {{ $data->user->telp }}
                                </td>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    {{ $data->address }}
                                </td>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    Rp{{ number_format($data->total_price, 0, '', '.') }}
                                </td>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    <img src="{{ asset('/storage/assets/images/payment/' . $data->payment_proof) }}"
                                        alt="" width="100" height="100">
                                </td>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    <!-- Modal toggle -->
                                    <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                        data-id={{ $data->id_order }}
                                        class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        View Detail
                                    </button>
                                </td>
                                <td class="px-6 py-4  whitespace-nowrap truncate">
                                    {{-- <form action="{{ route('progress.done', $data->id_order) }}" method="POST"
                                        onsubmit="return confirm('Are you sure want to done this order?')">
                                        @csrf
                                        <label for="">Shipping Method</label>
                                        <input type="text" name="shipping_method">
                                        <label for="">No Resi</label>
                                        <input type="text" name="no_resi">
                                        <button type="submit">Submit</button>
                                    </form> --}}

                                    <button data-modal-target="authentication-modal"
                                        data-modal-toggle="authentication-modal" data-id={{ $data->id_order }}
                                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Submit
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                                    No data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- modal -->
        <!-- View Detail -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-5xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Payment Detail
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div>
                        <div class="px-10 py-5 flex flex-row justify-between gap-5 text-center whitespace-nowrap truncate">
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                            Custom Name
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Total Item
                                        </th>
                                        <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                            Total Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Assembly</th>
                                        <td class="px-4 py-4" id="total_item_assembly"></td>
                                        <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right"
                                            id="total_price_assembly">
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Prototype
                                        </th>
                                        <td class="px-4 py-4" id="total_item_prototype"></td>
                                        <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right"
                                            id="total_price_prototype">
                                    </tr>
                                </tbody>
                            </table>
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                            Portfolio Name
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Portfolio Picture
                                        </th>
                                        <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                            Portfolio Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="dataBody"></tbody>
                            </table>
                        </div>
                        <hr class="border border-admin-900 w-full">
                        <div class="px-10 py-5 flex flex-row justify-between">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Total Price
                            </h3>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white" id="total_price"></h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- Submit modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Enter Data
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form id="submitForm" class="space-y-4" action="{{ route('progress.done', ':id_order') }}">
                            @csrf

                            <input type="hidden" name="id_order" id="id_order">
                            <div>
                                <label for="shipping_method"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Shipping Method</label>
                                <input name="shipping_method" id="shipping_method" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required></input>
                                <label for="no_resi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    No Resi</label>
                                <input name="no_resi" id="no_resi" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required></input>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            function formatNumber(number, options = {}) {
                return new Intl.NumberFormat('id-ID', options).format(number);
            }

            function formatCurrency(number) {
                return formatNumber(number, {
                    style: 'currency',
                    currency: 'IDR'
                });
            }

            // View Payment
            $('button[data-modal-toggle="static-modal"]').on('click', function() {
                let id_order = $(this).data('id');

                $.ajax({
                    url: '/admin/on_progress/' + id_order,
                    method: 'GET',
                    success: function(data) {
                        let dataBody = $('#dataBody');
                        dataBody
                            .empty(); // Kosongkan isi modal body sebelum menambahkan data baru

                        $('#total_item_assembly').text(data.dataAssembly.total)
                        $('#total_price_assembly').text(formatCurrency(data.dataAssembly.price))
                        $('#total_item_prototype').text(data.dataPrototype.total)
                        $('#total_price_prototype').text(formatCurrency(data.dataPrototype
                            .price))

                        let portfolioContent = ''
                        $.each(data.dataPortfolio, function(index, data) {
                            portfolioContent +=
                                '<tr class="border-b border-gray-200 dark:border-gray-700">'
                            portfolioContent +=
                                '<th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">' +
                                data.portfolio.portfolio_name + '</th>'
                            portfolioContent +=
                                '<td class="px-4 py-4"> <img class="h-auto w-24 rounded-lg" src="/storage/assets/images/portfolio/' +
                                data.portfolio.portfolio_picture + '" alt="' +
                                data
                                .portfolio.portfolio_name + '" </td>'
                            portfolioContent +=
                                '<td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right"">' +
                                formatCurrency(data.portfolio.portfolio_price) +
                                '</td></tr>'
                        })
                        dataBody.append(portfolioContent)

                        $('#total_price').text(formatCurrency(data.totalPrice))
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            // Submit Button

            // Handler saat tombol "Submit" di klik untuk menetapkan nilai id_order ke input hidden
            $('[data-modal-toggle="authentication-modal"]').click(function() {
                let id_order = $(this).data('id');
                $('#id_order').val(id_order);

                let actionUrl = $('#submitForm').attr('action');
                actionUrl = actionUrl.replace(':id_order', id_order);
                $('#submitForm').attr('action', actionUrl);
            });

            // Handler saat form di-submit
            $('#submitForm').submit(function(event) {
                event.preventDefault(); // Mencegah form dikirim dan halaman dimuat ulang

                // Mengambil data
                let dataForm = $('#submitForm').serialize();

                // Mengirim data form menggunakan jQuery AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'), // Mengambil URL dari action form
                    data: dataForm,
                    success: function(data) {
                        window.location.reload(); // Refresh halaman untuk memuat data terbaru
                    },
                    error: function(error) {
                        console.log(error.responseText);
                        alert('Terjadi kesalahan, data tidak dapat disimpan.');
                    }
                });
            });

            // Ketika tombol untuk menutup modal diklik
            $('[data-modal-hide="authentication-modal"]').click(function() {
                // Reset action form ke awal
                $('#submitForm').attr('action', '{{ route('review_file.reject', ':id_order') }}');
                // Reset nilai input hidden ke kosong
                $('#id_order').val('');
            });
        });
    </script>
@endsection
