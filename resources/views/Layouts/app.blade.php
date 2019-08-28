<!-- Хранится в resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>Hexlet Blog - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>