<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Power</title>
</head>
<body>
    <h1>{{$details['title']}}</h1>
    <h3>You've received a Contact Form submission from:</h3>
    <p>Name: {{$details['name']}}</p>
    <p>Email: {{$details['email']}}</p>
    <p>Phone: {{$details['phone']}}</p>
    <p>Message: {{$details['body']}}</p>

    <p>Thank you.</p>

</body>
</html>
