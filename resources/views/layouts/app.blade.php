<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>



                <body class="bg-gray-100">

                        <div class="flex min-h-screen">

                            <!-- Sidebar -->
                            <aside class="w-64 bg-blue-900 text-white p-5">
                                <h1 class="text-2xl font-bold mb-8">🏢 Admin</h1>

                                <nav class="space-y-4">
                                    <a href="#" class="block hover:text-yellow-300">Dashboard</a>
                                    <a href="#" class="block hover:text-yellow-300">Properties</a>
                                    <a href="#" class="block hover:text-yellow-300">Rooms</a>
                                    <a href="#" class="block hover:text-yellow-300">Tenants</a>
                                    <a href="#" class="block hover:text-yellow-300">Payments</a>
                                    <a href="#" class="block hover:text-yellow-300">Maintenance</a>
                                </nav>
                            </aside>

                            <!-- Main -->
                            <div class="flex-1">

                                <!-- Topbar -->
                                <header class="bg-white shadow p-4 flex justify-between">
                                    <h2 class="text-xl font-semibold">Dashboard</h2>
                                    <span>Welcome Admin</span>
                                </header>

                                <!-- Content -->
                                <main class="p-6">
                                    @yield('content')
                                </main>

                            </div>

                        </div>

                </body>


                
            </main>
        </div>
    </body>
</html>
