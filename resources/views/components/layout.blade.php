<!DOCTYPE html>
<html lang="en" id="pageroot">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default Title' }}</title>
    <meta name="{{ $metaTitle ?? 'Default Title' }}" content="{{ $metaDescription ?? 'Default description' }}" />
    @vite(['resources/css/app.css'], 'resources/js/app.js')
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="/assets/css/app.css" />

</head>





<body class="bg-gray-50 dark:bg-gray-1000 font-body text-sm leading-relaxed text-slate-600 dark:text-slate-300 font-normal min-w-[320px]">
    
    <x-navigation />

    @session('status')
        <div class="status">
            {{ $value }}
        </div>
    @endsession


    <!-- @ include('partials.navigation') convertimos esto en un componente porque es mas limpio i profesional-->
    {{ $slot }}
    <!-- variable reservada imprime el contenido variable -->


    @isset($sidebar)
        <div id="sidebar2">
            <h3>Side bar en layout</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset



</body>
</html>