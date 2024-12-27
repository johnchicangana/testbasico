<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schools</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="container mx-auto">
    <div class="flex justify-between py-4">
        <a class="rounded bg-gray-700 text-white px-7 py-3" href="/">Back to home</a>
        <a class="rounded bg-green-700 px-6 py-2 text-white" href="/schools/create">Add New!</a>
    </div>
    @if ($list)
        <table class="table-auto w-full border-separate border-spacing-2">
            <thead class="bg-gray-200 py-4">
                <tr class="text-center">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Created At</td>
                    <td>Updated At</td>
                    <td colspan="2">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr class="text-center">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                        <td>{{ $item->updated_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="/schools/{{ $item->id }}/edit" class="rounded bg-cyan-700 px-5 py-3 text-white">Edit</a>
                        </td>
                        <td>
                            <form action="/schools/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded bg-red-700 px-5 py-3 text-white">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-center py-4">
            {{ $list->links() }}
        </div>
    @endif
</body>
</html>