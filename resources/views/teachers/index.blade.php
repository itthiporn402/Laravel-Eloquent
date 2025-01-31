<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Teachers List</h1>
    <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Teacher Code</th>
                <th class="px-4 py-2 border">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td class="px-4 py-2 border">{{ $teacher->teacher_code }}</td>
                    <td class="px-4 py-2 border">{{ $teacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
