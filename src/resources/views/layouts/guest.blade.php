<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="shortcut icon" href="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/favicon/favicon.ico">
        <link rel="apple-touch-icon" href="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/favicon/android-chrome-192x192.png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
