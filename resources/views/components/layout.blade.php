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
        <x-nav-link href="/dashboard" :active="request()->routeIs('dashboard')">Dashboard</x-nav-link>
        @if(session('token'))
        <x-nav-link href="/logout" :active="request()->routeIs('logout')">Logout</x-nav-link>
        @else
        <x-nav-link href="/login">Login</x-nav-link>
        @endif
    </nav>
        <main>
            {{ $slot }}
        </main>
        <footer class="sticky bottom-0">

                        @include('partials.errors')


        </footer>

</body>
</html>
