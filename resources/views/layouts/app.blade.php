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

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166000335-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag() { dataLayer.push(arguments); }
          gtag('js', new Date());
      
          gtag('config', 'UA-166000335-1');
        </script>
        <meta charset="utf-8">
        <title>Typing Speed Test Game</title>
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://codingnepalweb.com/demos/custom-styles.css">
        <script src="https://codingnepalweb.com/demos/custom-scripts.js" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
          .download-btn-cn a {
            background: none;
            color: #fff;
            display: none !important;
            border: 2px solid #fff;
          }
      
          .download-btn-cn a:hover {
            color: #137786;
            background: #fff;
          }
        </style>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="{{asset('assets/js/paraUz.js')}}"></script>
        <!-- <script src="{{asset('assets/js/paragraphs.js')}}"></script> -->
        <script src="{{asset('assets/js/script2.js')}}"></script>
    </body>
</html>
