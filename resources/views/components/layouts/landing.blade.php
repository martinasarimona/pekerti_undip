<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pelatihan PEKERTI - Universitas Diponegoro' }}</title>
    @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen hero-gradient">
    @include('components.landing.notification')
    @include('components.landing.loading')
    <x-landing.nav />
    {{ $slot }}
    <x-landing.footer />
</body>
</html>
