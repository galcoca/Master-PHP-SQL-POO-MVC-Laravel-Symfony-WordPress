@include('includes.header')

{{-- Print screen --}}
<div>
    <h1>{{ $title }}</h1>
    <h2>{{ $movieList[2] }}</h2>
    <h3>{{ date('Y') }}</h3>
</div>

{{-- This is a comment --}}

{{ $director ?? 'No directors to show' }}

{{-- Conditionals --}}

@if ($title && count($movieList) >= 5)
    <h2>The title exists and is: {{ $title }} and the list is greather than 5</h2>
@elseif($title)
    <h2>The title is: {{ $title }} and the list is not greather than 5</h2>
@else
    <h2>The title doesnt exist</h2>
@endif

{{-- loops --}}
<?php $counter = 1 ?>

@for ($i = 0; $i <= 20; $i++)
    <span>The number is: {{$i}}</span><br/>
@endfor

<hr/>

@while ($counter < 50)
    @if ($counter % 2 == 0)
        <span>Odd Number: {{$counter}}</span><br/>
    @endif
    <?php $counter++; ?>
@endwhile


<hr/>

@foreach ($movieList as $movie)
    <p>{{$movie}}</p>
@endforeach

@include('includes.footer')
