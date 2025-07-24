<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <h1>Title</h1>
    <h2>Subtitle</h2>
    <p>Hello there, I'm a blade template!</p>

    @isset($name)
    <p>Your name is {{ $name }}</p>
    @endisset

    @isset($XSS)
    <p>{{ $XSS }}</p>
    @endisset

    @isset($unsetVariable)
    <marquee><span>This will never be rendered unless you set $unsetVariable: {{ $unsetVariable }}</span></marquee>
    @endisset
</body>
</html>
