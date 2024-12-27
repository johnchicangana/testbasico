<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test CRUD</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans bg-gray-200 container mx-auto pt-10">
        <h1 class="text-2xl text-center pb-10">Test CRUD</h1>
        <p>Este es un test para utilizar tablas desde una DB, una tabla es principal, la otra depende de la primera</p>
        <p>Las tablas se crearon usando seeders y factory</p>
        <ul class="list-disc list-inside">
            <li><a href="/schools" class="underline cursor-pointer">Listado de colegios</a></li>
            <li><a href="/students" class="underline cursor-pointer">Listado de Estudiantes</a></li>
        </ul>
    </body>
</html>
