<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CoE Treemine')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body class="min-h-screen w-screen font-inter">
    <main class="flex flex-col grow bg-custom-grey min-h-screen w-screen">
        @yield('content')
    </main>
</body>

</html>