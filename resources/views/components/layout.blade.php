<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Curriculum Vitae' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">
<x-navbar />
<main class="max-w-4xl mx-auto p-4">
    {{ $slot }}
</main>
<x-footer />
</body>
</html>
