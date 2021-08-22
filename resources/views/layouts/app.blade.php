<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Morse Trainer - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/morseToText">Morse To Text</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/textToMorse">Text To Morse</a>
                </li>
            </ul>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
