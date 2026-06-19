@props([
'title' => 'Idea'
])

<!doctype html>
<!--<html lang="en" data-theme="retro">-->
<html lang="en" data-theme="semiflow">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-nav />
<main class="max-w-3xl m-auto">
    {{ $slot }}
</main>
</body>
</html>
