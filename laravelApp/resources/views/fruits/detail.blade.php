<div>
    @if (session('status'))
        <p style="background:green;color:white;">
            {{ session('status') }}
        </p>
    @endif
    <br/>
    <h1>{{ $fruit->name }}</h1>
    <p>{{ $fruit->descr }}</p>
    <a href="{{route('fruits.edit', $fruit->id)}}">Edit Fruit</a>
    <a href="{{route('fruits.delete', $fruit->id)}}">Delete Fruit</a>
    <a href="{{route('fruits.index')}}">Back to list</a>
</div>
