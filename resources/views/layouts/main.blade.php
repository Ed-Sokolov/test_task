<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
