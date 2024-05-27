<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{$students->studentName}}</title>
</head>

<body>
<p><img src = "{{ asset('assets/studentsImages/' . $students->image) }}" alt = "" style="width: 300px;"></p>
    <h1><strong>Student: </strong>{{$students->studentName}}</h1>
    <hr>
    <h2><strong>Age: </strong>{{$students->age}}</h2>
    <hr>
    <h2><strong>City: </strong>{{$students->city}}</h2>
    <hr>
    <h2><strong>Active: </strong>{{$students->active == 1 ? 'Yes' : 'No'}}</h2>
</body>
</html>