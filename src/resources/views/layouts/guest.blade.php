<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Devide Up'))</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <meta name="description" content="効率的な現場作業を実現する無料のスケジュール管理ツール。簡単な操作でタスクを割り当て、メール通知などリアルタイムな情報共有。使いやすさと柔軟性を兼ね備え、現場のニーズに最適化されたサービスです。">
      <meta http-equiv="Content-Language" content="ja" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="@yield('title', config('app.name', 'Devide Up'))" />
      <meta property="og:url" content="https://devide-up.com" />
      <meta property="og:site_name" content="Devide Up" />
      <meta property="og:locale" content="ja_JP" />
      <meta property="og:description" content="現場の作業を効率化するスケジュール管理ツール。簡単な操作でタスクを管理し、リアルタイムで共有。今すぐ試してみてください。" />
      <meta property="og:image" content="https://devide-up2025.s3.ap-northeast-1.amazonaws.com/images/logo.jpg" />
      <link rel="shortcut icon" href="https://devide-up2025.s3.ap-northeast-1.amazonaws.com/images/favicon/favicon.ico">
      <link rel="apple-touch-icon" href="https://devide-up2025.s3.ap-northeast-1.amazonaws.com/images/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="https://devide-up2025.s3.ap-northeast-1.amazonaws.com/images/favicon/android-chrome-192x192.png">





        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NRFV8ZXFEE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NRFV8ZXFEE');
    </script>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
