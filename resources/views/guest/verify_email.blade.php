<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <a href="forgot">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                d="m15 19-7-7 7-7" />
        </svg>
    </a>

    <div class="flex items-center justify-center h-screen ">
        <div
            class="max-w-lg w-full mx-auto p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="md:flex items-center justify-center p-2 leading-normal px-4 pt-2 pb-8  ">
                <form class=" pt-6 md:p-2 mx-auto space-y-4  ">
                    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on
                        the link we just emailed to you? If you didn’t receive the email, we will gladly send you
                        another.</p>

                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-white bg-greens-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">RESEND
                            VERIFICATION EMAIL</a>
                        <a href="#" class="text-base font-bold text-gray-900 dark:text-white underline px-4">Log
                            Out
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>