<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="container mx-auto pt-10">
    <a href="/schools" class="rounded bg-gray-700 text-white px-7 py-3">Back</a>
    <h1 class="text-2xl text-center">Crear Nuevo Colegio</h1>
    <form action="/schools" method="POST" class="flex flex-col w-1/4 mx-auto">
        @csrf
        <label class="my-2 w-full flex justify-between">
            Name:
            <input type="text" name="name" id="name" class="border border-gray-400 p-1">
        </label>
        <label class="my-2 w-full flex justify-between">
            Address:
            <input type="text" name="address" id="address" class="border border-gray-400 p-1">
        </label>
        <button type="submit" class="rounded bg-green-700 text-white py-3">Save</button>
    </form>
</body>
</html>