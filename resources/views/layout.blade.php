<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlatziBlog</title>
</head>
<body>
    <nav>
        <a href="{{route('home.index')}}">Home</a>
        <a href="{{route('blog.index')}}"">Blog</a>
    </nav>
    @yield('content')
</body>
</html>