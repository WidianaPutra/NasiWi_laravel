<!DOCTYPE html>
<html lang="en">

<head>
    <x-header></x-header>
    <title>{{ $title }}</title>
</head>

<body class="min-h-screen">
    @if ($navbar === 'true')
        <x-navbar></x-navbar>
    @endif

    {{ $slot }}
</body>

</html>
