<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<style>
    .max-w-400 {
        max-width: 400px;
        margin: auto;
    }

    .card {
        background: #e3e3e3;
        padding: 1rem;
        text-align: center
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact Us</a>
</nav>
<body class="bg-gray-700 p-6 max-w-xl m-auto">
<main>
    {{ $slot }}
</main>
