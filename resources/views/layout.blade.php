<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ucwords(request()->segment(1) ?? 'Home') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    @livewireStyles
</head>
<body>
<header class="bg-secondary">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="d-inline-block text-info">Jezior's Livewire Products!</h1>

            @if(auth()->check())
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="{{ route('logout') }}">
                        Logout
                    </a>
                </nav>
            @endif
        </div>
    </div>
</header>

<div class="container">
    @yield('content')
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@livewireScripts
</body>
</html>
