<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Registers List</h1>
    <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Student</th>
                <th class="px-4 py-2 border">Course</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registers as $register)
                <tr>
                    <td class="px-4 py-2 border">{{ $register->student->name }}</td>
                    <td class="px-4 py-2 border">{{ $register->course->course_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
