<div>
    <h1>List of Fruits</h1>
    <h3>
        <a href="{{route('fruits.create')}}">Create Fruit</a>
    </h3>

    @if (session('status'))
        <p style="background:green;color:white;">
            {{ session('status') }}
        </p>
    @endif

    <ul>
        @foreach ($fruits as $fruit)
            <li>
                <a href="{{route('fruits.detail', $fruit->id)}}">{{ $fruit->name }}</a>
            </li>
        @endforeach
    </ul>

    <br>
</div>
