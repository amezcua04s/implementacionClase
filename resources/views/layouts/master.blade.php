<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Administrativo</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

    <header>
        @include('partials.nav-bar')
        @include('partials.validation-errors')
        @include('partials.messages')
    </header>

    <div class="container">
        @yield('content')

    </div>
</body>
</html>