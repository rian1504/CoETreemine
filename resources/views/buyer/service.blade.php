@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Service')

@section('content')
<div class="max-auto px-10 py-20 my-16">
    <h1 class="text-3xl font-bold text-green-600 dark:text-white mb-6">PCB SCANNING ELECTRON MICROSCOPE</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-64 object-cover rounded-t-lg" src="https://images.squarespace-cdn.com/content/v1/529a48e1e4b09eb80191621d/1634064788419-1RUKZGRRDHWGVS5VICTU/MEGA+Heading.jpg?format=1500w" alt="Service 1">
            </a>
            <div class="p-6">
                <p class="text-gray-700 dark:text-gray-400 leading-relaxed">We have more expertise, better equipment, and more scalability than any other repair provider. In specialized PCB repair and system test tools, but our PinPoint Diagnosys System is the universal test equipment in the latest range available. When combined with proprietary series PCB testing techniques and surface-mount handling equipment, our highly trained Technicians are certified to repair and rework standards, once the repair is complete, your PCB Board is functionally tested to ensure performance.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-64 object-cover rounded-t-lg" src="https://images.squarespace-cdn.com/content/v1/529a48e1e4b09eb80191621d/1634064788419-1RUKZGRRDHWGVS5VICTU/MEGA+Heading.jpg?format=1500w" alt="Service 2">
            </a>
            <div class="p-6">
                <p class="text-gray-700 dark:text-gray-400 leading-relaxed">We have more expertise, better equipment, and more scalability than any other repair provider. In specialized PCB repair and system test tools, but our PinPoint Diagnosys System is the universal test equipment in the latest range available. When combined with proprietary series PCB testing techniques and surface-mount handling equipment, our highly trained Technicians are certified to repair and rework standards, once the repair is complete, your PCB Board is functionally tested to ensure performance.</p>
            </div>
        </div>
    </div>

    <div class="max-w-lg mt-12 bg-greens-900 border border-gray-200 rounded-lg shadow-lg p-6 sm:p-8 dark:bg-gray-800 dark:border-gray-700 mx-auto">
        <h2 class="text-2xl font-bold text-white mb-4">CONTACT INFO</h2>
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            <li class="py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-house text-white"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-white">Head office :</p>
                        <p class="text-sm text-white">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                    </div>
                </div>
            </li>
            <li class="py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-building text-white"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-white">Work Shop :</p>
                        <p class="text-sm text-white">Gedung Utama Politeknik Negri Batam.</p>
                    </div>
                </div>
            </li>
            <li class="py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-phone text-white"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-white">Call Us :</p>
                        <p class="text-sm text-white">(021) - 5010 1875</p>
                    </div>
                </div>
            </li>
            <li class="py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-envelope text-white"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-white">Mail Us :</p>
                        <p class="text-sm text-white">Polibatam@ac.id</p>
                    </div>
                </div>
            </li>
            <li class="py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-clock text-white"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-white">Opening Time :</p>
                        <p class="text-sm text-white">Monday - Friday : 08.00 AM - 05.00 PM</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection