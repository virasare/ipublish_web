<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta id="user-email" data-email="{{ Auth::user()->email }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{--  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">  --}}


    <!- Page Heading ->
        @if (isset($header))
            <div class="bg-[#DBE9FE] shadow pt-0 px-4 sm:px-6 md:px-8 lg:ps-72">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="text-[30px] font-bold">
                        {{ $header }}
                    </div>
                </div>
            </div>
        @endif


        @include('layouts.sidebar')
        {{--  include('users.profile')  --}}
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        </div>
    </div>
</body>

</html>
