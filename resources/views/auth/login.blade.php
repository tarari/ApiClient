<x-layout>
    <form class="border border-indigo-300 m-2 px-2" action="{{route('auth')}}" method="POST">
        @method('POST')
        @csrf
        <input class="bg-gray-200 font-mono text-xs" type="email" name="email" id="email" placeholder="email">
        <input class="bg-gray-200 text-mono text-xs" type="password" name="password" id="password" placeholder="password">
        <button type="submit">Log</button>
    </form>
</x-layout>
