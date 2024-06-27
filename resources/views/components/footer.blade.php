<footer class="bg-greens-900 shadow h-52 w-full -mt-8">
    <div class="w-full mx-14 max-w-screen-xl p-4 md:flex md:items-center md:justify-between flex text-white">
        <div class="flex gap-12">
            <div>
                <span class="text-sm sm:text-center dark:text-gray-400">
                    &copy; {{ date('Y') }} CoE Treemine
                </span>
                <div class="w-28 flex justify-center items-center">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo CoETreemine" class="w-14 h-auto">
                </div>
            </div>
            <div class="flex flex-col">
                <h1 class="font-semibold text-lg mb-4">Main Menu</h1>
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('buyer.assembly.index') }}">Assembly</a>
                <a href="{{ route('buyer.prototype.index') }}">Prototype</a>
                <a href="{{ route('buyer.portfolio.index') }}">Product</a>
                <a href="{{ route('buyer.service') }}">Service</a>
            </div>
        </div>
        <div class="me-10">
            <h1 class="font-semibold text-lg mb-4">Call Us</h1>
            <p><i class="fas fa-envelope m-2"></i>CoETreemine@gmail.com</p>
            <p><i class="fas fa-phone m-2"></i>812456780</p>
            <p><i class="fas fa-globe m-2"></i>CoETreemine.id</p>
        </div>
    </div>
</footer>
