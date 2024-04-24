@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Detail Product Portfolio')

@section('content')
<div class="mx-20">


    <a href="portofolio"></a>
    <div class="inline-grid grid-cols-2 mt-10">
        <div>
            <img src="./image/development board.jpg" class="h-80 w-80">
        </div>
        <div class="grid grid-rows-3">
            <div>
                <h1 class="text-justify font-extrabold text-black-900" style="font-size: 26px;">
                    Control Module Without USB Cable
                </h1>
            </div>

            <div class="grid grid-rows-3 justify-center mr-44 text-justify">
                <div class="inline-grid grid-cols-3">
                    <div>
                        <h3>Quantity</h3>
                    </div>

                    <div class="ml-3">
                        <input type="number" name="" id="1" class="w-6 h-6">
                    </div>

                    <div class="">
                        <p>5 available</p>
                    </div>
                </div>

                <div class="inline-grid grid-cols-2">
                    <div class="">
                        <h3>Price</h3>
                    </div>
                    <div class="text-center font-extrabold text-black-900" style="font-size: 20px;">
                        <p>Rp400k</p>
                    </div>
                </div>
            </div>

            <div class="inline-grid grid-cols-2 justify-item-center">
                <div>
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Add to cart
                    </button>
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        Buy now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="text-left font-extrabold text-black-900" style="font-size: 15px;">DESCRIPTION :</h1>
        <p class="text-justify">This is compatible R3 Mega2560 ATmega2560-16AU control board without USB cable Mega
            is an ATmega2560 as core microcontroller development board itself has 54 groups digital I / O input /
            output terminal (14 groups do PWM outputs), 16 sets of simulation than the input side, group 4 UARTs
            (hardware serial ports), using the 16 MHz crystal oscillator. With the bootloader, download the program
            directly via USB without having to go through other external writer. Supply part of the optional USB
            power, or as an external power using the AC-to-DC adapter and battery. Rapid growth due to open the
            original code, as well as the concept of using Java (cross-platform) C language development environment
            for peripheral module. The main reason attracted Artist can quickly use the language with Flash or
            Processing software communication, to make multimedia interactive works. development IDE interface is
            based on open-source principles, allows you to free download for use in project work, school teaching,
            motor control, interactive works</p>
    </div>

    <div>
        <h1 class="text-left font-extrabold text-black-900 mt-4" style="font-size: 15px;">SPECIFICATION :</h1>
        <p>
            Microcontroller: ATmega2560 <br> Operating voltage: 5V <br> Input voltage (recommended): 7-12V <br> Input voltage (limits): 6-20V <br> Digital I / O pins: 54 (of which 14 provide PWM output) <br> Analog input pins: 16 <br>DC current per I / O pin: 40 mA <br>DC current for 3.3V Pin: 50 mA <br> Flash Memory: 256 KB of which 4 KB used by bootloader <br> SRAM: 8 KB <br> EEPROM: 4 KB <br> Clock Speed: 16MHz
        </p>
    </div>
</div>
@endsection