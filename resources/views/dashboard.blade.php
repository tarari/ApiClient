<x-layout>
    <h1>News</h1>
    <div class="m-2 p-2 border border-indigo-300">
        @if(isset($data))
            @foreach ($data as $item)
            <h2>{{$item['title']}}</h2>
            <p>{{$item['body']}}</p>
            @endforeach
        @else
        <p>No data</p>
        @endif
    </div>
</x-layout>
