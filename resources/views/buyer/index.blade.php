<!--@if (Auth::check())
{{-- Buyer --}}
        <h1>Buyer</h1>
        @include('layouts.navigation')
@else
{{-- Guest --}}
        <a href="{{ route('login') }}">Login</a>
        <h1>Guest</h1>
@endif

    <h1>index</h1> -->


@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Home')

@section('carousel')
    <div class="mt-36">
        @include('components.carousel')
    </div>
@endsection

@section('content')
    <div class="flex flex-col py-8 gap-8 h-full">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-8 py-8">
                <h1 class="text-center text-buyer-green text-2xl font-bold my-6">Industrial Arduino Compatible
                    Microcontrollers, Shields, and Accessories</h1>
                <h2 class="text-justify">Rugged Circuits products are engineered with built-in protective circuits and
                    performance enhancing features that put them a LEVEL ABOVE standard Arduino devices. We invented the
                    "RUGGEDIZED" market for those customers that need a superior Arduino solution.  Our products are
                    specifically designed to offer greater performance, last longer, and operate in demanding environments.
                    Our circuitry has been modified to protect against ESD, reverse voltage, over/under voltage, over/under
                    current scenarios which occur within the product environment and/or by user mistake. Our products also
                    provide greater connectivity flexibility accepting up to 30 VDC, and operating flexibility with models
                    operating down to -40C. Handcrafted and designed in Grand Rapids, Michigan since 2007!</h2>
            </div>
        </div>
        <div class="p-8 bg-white rounded-lg shadow-lg border-t-2 border-buyer-green w-full h-full">
            <div class="flex flex-row justify-center gap-8">
                <div class="w-1/2 p-4 flex flex-col justify-center items-center shadow-lg">
                    <h1 class="text-buyer-green text-2xl font-bold">PROTOTYPE</h1>
                    <div class="flex justify-center items-center w-full h-72 p-8">
                        <img src="{{ asset('image/custom/prototype.jpeg') }}" alt="prototype" class="image my-3">
                    </div>
                    <p class="text-justify mb-6">PCB prototypes are the first samples of products that are built with the
                        primary aim of testing the functionality of the design ideas.Designers and engineers use different
                        types of PCB prototypes to test various aspects of a selected design.</p>
                </div>
                <div class="w-1/2 p-4 flex flex-col justify-center items-center shadow-lg">
                    <h1 class="text-buyer-green text-2xl font-bold">ASSEMBLY</h1>
                    <div class="flex justify-center items-center w-full h-72 p-8">
                        <img src="{{ asset('image/custom/assembly.jpeg') }}" alt="assembly" class="image my-3">
                    </div>
                    <p class="text-justify">A printed circuit board assembly (PCBA) describes the finished board after all
                        the components have been soldered and installed on a printed circuit board (PCB). The conductive
                        pathways engraved in the laminated copper sheets of PCBs are used within a non-conductive substrate
                        in order to form the assembly.</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-8 py-8">
                <div class="flex justify-center items-center h-24 gap-4">
                    <div class="py-4 me-5">
                        <h1 class="text-2xl font-bold text-buyer-green ">How To Use</h1>
                        <p class="text-gray-500">Place an order on PCB</p>
                    </div>
                    <div class="max-w-sm">
                        <hr class="border-l-2 border-custom-grey h-36 -mt-8 -ms-4">
                    </div>
                    <div class="flex justify-center items-center gap-2 text-gray-500 text-sm text-nowrap truncate">
                        <div class="text-center">
                            <i class="fas fa-file"></i>
                            <h1>Online Quote</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-upload"></i>
                            <h1>Upload PCB File</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-clipboard-check"></i>
                            <h1>Order Review</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-credit-card"></i>
                            <h1>Payment</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-industry"></i>
                            <h1>Fabrication</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-truck"></i>
                            <h1>Delivery</h1>
                        </div>
                        <div class="border-t border-gray-400 border-2 w-11 h-0"></div>
                        <div class="text-center">
                            <i class="fas fa-box"></i>
                            <h1>Confirm Received</h1>
                        </div>
                    </div>
                </div>
                <hr class="border-t-2 border-custom-grey -mx-8 my-4">
                <div class="flex justify-evenly mt-6">
                    <a href="{{ route('buyer.prototype.index') }}">
                        <div class="shadow-lg flex flex-col items-center w-52 p-2 gap-2 hover-effect ">
                            <img src="{{ asset('image/prototype.jpg') }}" alt="" class="image">
                            <h1 class="font-semibold text-lg">Standard PCB</h1>
                        </div>
                    </a>
                    <a href="{{ route('buyer.assembly.index') }}">
                        <div class="shadow-lg flex flex-col items-center w-52 p-2 gap-2 hover-effect ">
                            <img src="{{ asset('image/assembly.jpg') }}" alt="" class="image">
                            <h1 class="font-semibold text-lg">Assembly</h1>
                        </div>
                    </a>
                    <a href="{{ route('buyer.portfolio.index') }}">
                        <div class="shadow-lg flex flex-col items-center w-52 p-2 gap-2 hover-effect ">
                            <img src="{{ asset('image/pcb.jpg') }}" alt="" class="image">
                            <h1 class="font-semibold text-lg">PCB Product</h1>
                        </div>
                    </a>
                    <a href="{{ route('buyer.service') }}">
                        <div class="shadow-lg flex flex-col items-center w-52 p-2 gap-2 hover-effect ">
                            <img src="{{ asset('image/service.jpg') }}" alt="" class="image">
                            <h1 class="font-semibold text-lg">Service</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg border-t-2 border-buyer-green h-full">
            <div class="px-8 py-8 flex justify-evenly h-full">
                <div>
                    <h1 class="font-semibold text-2xl">Why Buy Printed Circuit Boards From us?</h1>
                    <div class="flex gap-4">
                        <div class="my-4">
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                            <p class="text-buyer-green text-xl font-bold">✓</p>
                        </div>
                        <div class="my-4">
                            <p>24 hours production lead-time*</p>
                            <p>Team supported by over 90 professionals & technical</p>
                            <p>99% on-Time Shipping with great support from DHL</p>
                            <p>Great quality approved by customers all over the world</p>
                            <p>Trusted Experience</p>
                            <p>A 24/7 non-stop production and assistance service</p>
                            <p>Low minimum quantity requirement</p>
                            <p>Factory PCBs with competitive advantages</p>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm mx-auto h-[400px] -my-8 ">
                    <hr class="border-l-2 border-custom-grey h-full">
                </div>
                <div class="relative">
                    <h1 class="absolute left-4 text-white text-xs">HIGH-END COMPLEX</h1>
                    <h2 class="absolute top-4 left-4 text-white text-xl font-bold">PCB PROTOTYPE</h2>
                    <img src="/image/custom/prototype1.jpg" alt="">
                </div>
                <div class="max-w-sm mx-auto h-[400px] -my-8 ">
                    <hr class="border-l-2 border-custom-grey h-full">
                </div>
                <div class="relative">
                    <h1 class="absolute left-4 text-white text-xs">Turnkey or consigned</h1>
                    <h2 class="absolute top-4 left-4 text-white text-xl font-bold">PCB Assembly</h2>
                    <img src="/image/custom/assembly1.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>


@endsection
