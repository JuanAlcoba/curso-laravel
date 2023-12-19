<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('blog') }}">BLOG</a>
    </p>
    @yield('content')
</body>
</html>
