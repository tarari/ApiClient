<x-layout>
    <h1 class="text-3xl">News</h1>
    <div class="m-2 p-2 border border-indigo-300">
        @if(isset($data))
            @foreach ($data as $item)
            <div class="m-2">
                <h2>{{$item['title']}}</h2>
                <p>{{$item['body']}}</p>
            </div>

            @endforeach
        @else
        <p>No data</p>
        @endif
    </div>
</x-layout>
