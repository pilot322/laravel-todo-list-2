<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a test!</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1>Todo list app #34957</h1>
        <h2>juniordev™</h2>
    </header>
    <main class="w-screen">
        {{ $slot }}
    </main>
</body>

</html>
