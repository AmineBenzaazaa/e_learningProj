<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link name="favicon" type="image/x-icon" href="{{ url('/uploads/system/favicon.png') }}" rel="shortcut icon" />
    <link rel="favicon" href="{{ url('/assets/frontend/default/img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ url('/assets/frontend/default/img/icons/icon.png') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/jquery.webui-popover.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/slick-theme.css') }}">

    <!-- font awesome 5 -->
    <script src="https://kit.fontawesome.com/7b845e807e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/global/toastr/toastr.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
    <!-- Styles -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">

        @include('layouts.header')

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