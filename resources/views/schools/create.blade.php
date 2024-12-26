<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Crear Nuevo Colegio</h1>
    <form action="/schools" method="POST">
        @csrf
        <label>
            Name:
            <input type="text" name="name" id="name">
        </label>
        <label>
            Address:
            <input type="text" name="address" id="address">
        </label>
        <button type="submit">Save</button>
    </form>
</body>
</html>