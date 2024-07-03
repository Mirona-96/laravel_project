<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'CRUD usando Laravel')</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Seu CSS customizado -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">CRUD no MySQL com Laravel</h2>

    </div>

    <div class="container">
        @yield('mainContent')
    </div>

    <div style="position: fixed; bottom: 10px; right: 10px; color: blue;">
        <strong>
            Elton Mirona
        </strong>
    </div>
</body>
</html>