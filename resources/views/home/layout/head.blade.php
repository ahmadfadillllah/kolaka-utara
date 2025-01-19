<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kabupaten Kolaka Utara, yang terletak di Provinsi Sulawesi Tenggara, Indonesia, adalah daerah yang menyimpan banyak potensi alam dan budaya yang menakjubkan. Dikenal dengan keindahan alamnya, Kolaka Utara menawarkan pemandangan alam yang memukau, seperti pantai-pantai indah, pegunungan, dan air terjun yang menawan">
    <meta name="keywords" content="Kolaka Utara">
    <meta name="author" content="Kolaka Utara">
    <title>Home - {{ config('app.name') }}</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('home') }}/assets/img/logo-kolaka.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('home') }}/assets/fonts/unicons/unicons.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('home') }}/style.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/icon.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="grow shrink-0">
    @include('notification.index')
