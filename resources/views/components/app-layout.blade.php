<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header></header>
        <main class="ml-4">
            {{$slot}}
        </main>
    <footer></footer>

</body>
</html>