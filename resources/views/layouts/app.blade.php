<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ ('/css/all.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ ('js/all.js')}}"></script>
</head>
<style>
    #votacion {
        position: absolute;
        top: 50%;
        left: 40px;
        z-index: 1;
    }
    .miBarra {
        width:400px;
        height:50px;
        border-radius:5px;
        border:1px solid #808080;
        padding:2px 10px;
        position:relative;
        font-family:Arial;
    }
    .miBarra>div {
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        width:0px;
        background-color:#5278ff;
        z-index:-1;
    }
    .miBarra>span {
        position:absolute;
        top:50%;
        transform:translate(0,-50%);
    }
    .miBarra>span.center {
       left:50%;
        transform:translate(-50%,-50%);
    }
    .miBarra>span.right {
       left:calc(100% - 50px);
    }
</style>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

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

    @stack('modals')

    @livewireScripts
</body>

</html>