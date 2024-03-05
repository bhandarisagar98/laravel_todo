<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo</title>
    <style>
        /* Resetting default margins and paddings */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        ul,
        ol,
        li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h2 {
            margin: 0;
            font-size: 24px;
        }

        header .c-title {
            color: #fff;
            text-decoration: none;
        }

        .c-button {
            margin-top: 20px;
            text-align: center;
        }

        .c-button a {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .c-button a:hover {
            background-color: #555;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h2><a href="/" class="c-title">Prajwal Sagar Bhandari Todo</a></h2>
    </header>
    <main>
        <div class="c-button">
            @unless(in_array(Route::currentRouteName(), ['createtodo', 'edittodo']))
            <a href="/create">Create Todo</a> <!-- Include "Create Todo" link unless current route is 'createtodo' or 'edittodo' -->
            @endunless
        </div>
        @yield("content")
    </main>
</body>

</html>