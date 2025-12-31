<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ministore') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="flex ">
             <div class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-200">
            {{-- <div class="flex"> --}}

        

              @include('layouts.sidebar')

             <div class="flex-1">
       
              </div>
             </div>

              <!-- Page Heading -->
   
        
               <main class="flex-1 bg-gray-100 p-6 m">
            <!-- Page Content -->


             @isset($header)
            <header class="bg-gradient-to-r from-green-300 to-indigo-600 text-white shadow-lg rounded-xl">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>

 @endisset
                {{ $slot }}
                {{-- @yield('content') --}}
            </main>
        </div>
        </div>

    </body>
</html>
