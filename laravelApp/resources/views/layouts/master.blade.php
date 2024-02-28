<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title - @yield('title')</title>
</head>

<body>
    @section('header')
        <h1>Header of the web(master)</h1>
    @show
    <hr />
    <div class="content">
        @yield('content')
    </div>
    <hr />
    @section('footer')
        <h1>Footer of the web(master)</h1>
    @show
</body>

</html>
