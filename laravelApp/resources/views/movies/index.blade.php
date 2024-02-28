<h1>{{ $title }}</h1>
<p>(Index action from Movies Controller)</p>

@if (isset($page))
    <h3>the page is: {{ $page }}</h3>    
@endif

<a href="{{route('movies.detail')}}">Go to detail</a>
