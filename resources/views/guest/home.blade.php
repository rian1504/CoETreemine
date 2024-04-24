@extends('layouts.guest_homepage')

@section('title', 'CoE Treemine | Home')

@section('content')

<div class="flex flex-col my-8 gap-4">
    <div class="bg-white rounded-lg">
        <div class="mx-8 my-8">
            <h1 class="text-center text-greens-900 text-2xl font-bold">Industrial Arduino Compatible Microcontrollers, Shields, and Accessories</h1>
            <h2 class="text-justify">Rugged Circuits products are engineered with built-in protective circuits and performance enhancing features that put them a LEVEL ABOVE standard Arduino devices. We invented the "RUGGEDIZED" market for those customers that need a superior Arduino solution.  Our products are specifically designed to offer greater performance, last longer, and operate in demanding environments. Our circuitry has been modified to protect against ESD, reverse voltage, over/under voltage, over/under current scenarios which occur within the product environment and/or by user mistake. Our products also provide greater connectivity flexibility accepting up to 30 VDC, and operating flexibility with models operating down to -40C. Handcrafted and designed in Grand Rapids, Michigan since 2007!</h2>
        </div>
    </div>
    <div class="bg-white rounded-lg border-t-2 border-greens-900">
        <div class="mx-8 mt-8 grid grid-cols-2 text-center gap-16">
            <div class="">
                <h1 class="text-greens-900 text-2xl font-bold">PROTOTYPE</h1>
                <img src="/image/custom/prototype.jpeg" alt="" class="w-2/3 h-1/2 mx-auto object-cover my-3">
                <p class="text-justify">PCB prototypes are the first samples of products that are built with the primary aim of testing the functionality of the design ideas.Designers and engineers use different types of PCB prototypes to test various aspects of a selected design.</p>
            </div>
            <div class="">
                <h1 class="text-greens-900 text-2xl font-bold">ASSEMBLY</h1>
                <img src="/image/custom/assembly.jpeg" alt="" class="w-2/3 h-1/2 mx-auto object-cover my-3">
                <p class="text-justify">A printed circuit board assembly (PCBA) describes the finished board after all the components have been soldered and installed on a printed circuit board (PCB). The conductive pathways engraved in the laminated copper sheets of PCBs are used within a non-conductive substrate in order to form the assembly.</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg">
        <div class="mx-8 my-8">
            <div class="flex h-24">
                <div class="border-r-4 border-gray-500 w-52 h-full">
                    <h1 class="text-2xl font-bold text-greens-900 ">How To Use</h1>
                    <p>Place an order on PCB</p>
                </div>
                <div class="flex gap-2 ms-auto text-gray-500">
                    <div class="text-center">
                        <i class="fas fa-file"></i>
                        <h1>Online Quote</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-upload"></i>
                        <h1>Upload PCB File</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-clipboard-check"></i>
                        <h1>Order Review</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-credit-card"></i>
                        <h1>Payment</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-industry"></i>
                        <h1>Fabrication</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-truck"></i>
                        <h1>Delivery</h1>
                    </div>
                    <div class="border-t border-gray-400 border-2 w-11 mt-3 h-0"></div>
                    <div class="text-center">
                        <i class="fas fa-box"></i>
                        <h1>Confirm Received</h1>
                    </div>
                </div>
            </div>
            <div class="border-t-4 border-gray-600"></div>
            <div class="flex justify-evenly">
                <div class="flex flex-col items-center">
                    <img src="/image/portfolio/arduino.jpeg" alt="" class="w-52 object-cover m-2">
                    <h1 class="font-semibold">Arduino</h1>
                    <p>From Rp <span class="text-greens-900">300.000</span></p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/image/portfolio/arduino.jpeg" alt="" class="w-52 object-cover m-2">
                    <h1 class="font-semibold">Arduino</h1>
                    <p>From Rp <span class="text-greens-900">300.000</span></p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/image/portfolio/arduino.jpeg" alt="" class="w-52 object-cover m-2">
                    <h1 class="font-semibold">Arduino</h1>
                    <p>From Rp <span class="text-greens-900">300.000</span></p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/image/portfolio/arduino.jpeg" alt="" class="w-52 object-cover m-2">
                    <h1 class="font-semibold">Arduino</h1>
                    <p>From Rp <span class="text-greens-900">300.000</span></p>
                </div>
            </div>
            <div class="flex justify-end my-8">
                <a href="/portfolio" class="flex w-auto h-7 p-4 items-center rounded-lg text-white bg-greens-900">Show More</a>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg border-t-2 border-greens-900">
        <div class="mx-8 my-8 flex justify-evenly">
            <div>
                <h1 class="font-semibold text-2xl">Why Buy Printed Circuit Boards From us?</h1>
                <div class="flex gap-4">
                    <div class="my-4">
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
                        <p class="text-greens-900 text-xl font-bold">✓</p>
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
            <div class="border-2 border-gray-400 h-100"></div>
            <div class="relative">
                <h1 class="absolute left-4 text-white text-xs">HIGH-END COMPLEX</h1>
                <h2 class="absolute top-4 left-4 text-white text-xl font-bold">PCB PROTOTYPE</h2>
                <img src="/image/custom/prototype1.jpg" alt="">
            </div>
            <div class="border-2 border-gray-400 h-100"></div>
            <div class="relative">
                <h1 class="absolute left-4 text-white text-xs">Turnkey or consigned</h1>
                <h2 class="absolute top-4 left-4 text-white text-xl font-bold">PCB Assembly</h2>
                <img src="/image/custom/assembly1.jpeg" alt="">
            </div>
        </div>
    </div>
</div>


@endsection