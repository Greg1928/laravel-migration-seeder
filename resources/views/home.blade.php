<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel migration</title>
</head>
<body>
    <h2>Treni in partenza nella data odierna:</h2>
    @foreach ($trains as $train)
    <ul>
        <li>Azienda: {{$train['azienda']}}</li>
        <li>Stazione di Partenza: {{$train->stazione_partenza}}</li>
        <li>Stazione di Arrivo: {{$train->stazione_arrivo}}</li>
        <li>Codice Treno: {{$train->codice_treno}}</li>
    </ul>
        <hr>
    @endforeach
</body> 
</html>