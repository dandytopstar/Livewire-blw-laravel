<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailData['title'] }}</title>
</head>
<body>
<h1>{{ $mailData['title'] }}</h1>
<p>{{ $mailData['body'] }}</p>

<p>name: {{ $mailData['name'] }}</p>
<p>email: {{ $mailData['email'] }}</p>
<p>phone: {{ $mailData['phone'] }}</p>
<p>company: {{ $mailData['company'] }}</p>
<p>details: {{ $mailData['details'] }}</p>
</body>
</html>