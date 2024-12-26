<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="/schools/{{$school->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            Name:
            <input type="text" name="name" id="name" value="{{$school->name}}">
        </div>
        <div>
            Address:
            <input type="text" name="address" id="address" value="{{$school->address}}" >
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>