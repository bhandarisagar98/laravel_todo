<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo</title>
</head>

<body>
    <header>
        <h2><a href="/">Prajwal Sagar Bhandari Todo</a></h2>
        @if (!in_array(Route::currentRouteName(), ['createtodo', 'edittodo']))
        <a href="/create">Create Todo</a> <br><br>
        @endif
        <br>
        <br>
    </header>
    <main>
        @yield("content")
    </main>
</body>

</html>