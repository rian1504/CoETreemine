@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Home')

@section('content')

<div class="flex flex-col my-8 gap-4">
    <div class="bg-white rounded-lg">
        <div class="mx-8 my-8">
            <h1 class="text-center text-greens-900 text-2xl font-bold">Industrial Arduino Compatible Microcontrollers, Shields, and Accessories</h1>
            <h2 class="text-justify">Rugged Circuits products are engineered with built-in protective circuits and performance enhancing features that put them a LEVEL ABOVE standard Arduino devices. We invented the "RUGGEDIZED" market for those customers that need a superior Arduino solution.  Our products are specifically designed to offer greater performance, last longer, and operate in demanding environments. Our circuitry has been modified to protect against ESD, reverse voltage, over/under voltage, over/under current scenarios which occur within the product environment and/or by user mistake. Our products also provide greater connectivity flexibility accepting up to 30 VDC, and operating flexibility with models operating down to -40C. Handcrafted and designed in Grand Rapids, Michigan since 2007!</h2>
        </div>
    </div>
    <div class="bg-white rounded-lg">
        <div class="mx-8 my-8 grid grid-cols-2 text-center gap-16">
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

    </div>
    <div class="bg-white rounded-lg">

    </div>
</div>


@endsection