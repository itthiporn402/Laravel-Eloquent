<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Courses List</h1>
    <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Course Code</th>
                <th class="px-4 py-2 border">Course Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td class="px-4 py-2 border">{{ $course->course_code }}</td>
                    <td class="px-4 py-2 border">{{ $course->course_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
