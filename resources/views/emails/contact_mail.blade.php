<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Mail</title>
    <style>
        /* Voeg hier je CSS-stijlen toe */
    </style>
</head>

<body>
    <p><strong>Naam:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Bericht:</strong><br>{{ $details['userMessage'] }}</p>

</body>

</html>