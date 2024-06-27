<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoE Treemine | Reset Password</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-xl w-full mx-auto p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center p-4 leading-normal px-8 pt-6 pb-8 mb-4 ">
                <form class=" mx-auto space-y-6" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <h1 class="text-center text-black-700 font-bold">ENTER YOUR PASSWORD </h1>
                    <p>This is the final step in recovering your password!</p>

                    {{-- email --}}
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Address <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-600 dark:text-white dark:focus:ring-green-800 dark:focus:border-green-500" placeholder="name@.com" required value="{{ old('email', $request->email) }}" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- password --}}
                    <div class="mb-5 relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                            Password <span class="text-red-500">*</span></label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-600 dark:text-white dark:focus:ring-green-800 dark:focus:border-green-500" placeholder="••••••••" required autocomplete="new-password" />
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPassword()"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- confirmation password --}}
                    <div class="mb-5 relative">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password <span class="text-red-500">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-600 dark:text-white dark:focus:ring-green-800 dark:focus:border-green-500" placeholder="••••••••" required />
                        <i class="absolute top-10 right-3 text-gray-500 hover:text-green-500 cursor-pointer fas fa-eye-slash" onclick="showPasswordConfirmation()"></i>
                    </div>

                    {{-- Button submit --}}
                    <div class="flex items-center justify-center">
                        <button type="submit" class="text-white bg-buyer-green hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reset
                            Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPassword() {
            let password = document.getElementById("password")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }

        function showPasswordConfirmation() {
            let password = document.getElementById("password_confirmation")
            password.type === "password" ? password.type = 'text' : password.type = 'password'
        }
    </script>
</body>

</html>