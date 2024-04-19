<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <h1>{{ env('APP_NAME') }}</h1>
    </header>
    <nav class=" flex bg-gray-300 p-4">
        <a class="text-green-400 px-3" href="/">Home</a>
        @auth
        <a class="text-green-400 px-3" href="/logout">Logout</a>
        @endauth
        <a class="text-green-400 px-3" href="/login">login</a>
    </nav>
        <main>
            {{ $slot }}
        </main>
</body>
</html>
