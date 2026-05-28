@props([
'title' => 'Laracasts'
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        nav {
            margin-bottom: 20px;
        }

        nav > a {
            color: blue;
            margin-right: 12px;
            text-decoration: none;
        }

        nav > a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact</a>
</nav>

<main>
    {{ $slot }}
</main>

</body>
</html>
