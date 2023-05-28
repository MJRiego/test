



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome User </title>
</head>
<body>
    @foreach ($students as $student)
    <ul>
        <li> <h1> {{ $student->first_name  }} {{ $student->last_name }} </h1> </li>
    </ul>
    @endforeach
   
</body>
</html>