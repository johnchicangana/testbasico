<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="/students/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Name:
            <input type="text" name="name" id="name" value="{{$student->name}}">
        </label>
        <label>
            Code Number:
            <input type="text" name="code_number" id="code_number" value="{{$student->code_number}}">
        </label>
        <label>
            School:
            <input type="text" name="school_id" id="school_id" value="{{$student->school_id}}">
        </label>
        <button type="submit">Save</button>
    </form>
</body>
</html>