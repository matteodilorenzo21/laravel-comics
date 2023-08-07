<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{ env('APP_NAME') }} | Home</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/ico">

    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    @include('components/header')
</body>

</html>
