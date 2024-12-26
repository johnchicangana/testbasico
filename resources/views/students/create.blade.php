<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Crear Nuevo Estudiante</h1>
    <form action="/students" method="POST">
        @csrf
        <label>
            Name:
            <input type="text" name="name" id="name">
        </label>
        <label>
            Code Number:
            <input type="text" name="code_number" id="code_number">
        </label>
        <label>
            School:
            <input type="text" name="school_id" id="school_id">
        </label>
        <button type="submit">Save</button>
    </form>
</body>
</html>