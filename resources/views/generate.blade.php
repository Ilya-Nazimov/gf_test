<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Генерация случайного числа</title>
</head>
    <body>
        <div class="container">
            <form method="POST" action="/generate" class="mb-3 mt-3 col-md-8 offset-md-2">
                {{ csrf_field() }}
                <input type="submit" value="Сгенерировать случайное число" class="col-md-8 offset-md-2">
            </form>
            <form method="GET" action="/retrieve" class="col-md-8 offset-md-2">
                {{ csrf_field() }}
                <input type="number" name="id" placeholder="Введите ID" class="col-md-8 offset-md-2" required>
                <input type="submit" value="Получить число по ID" class="col-md-8 offset-md-2 mt-3">
            </form>
            <h2 class="mt-3" align="center">Сгенерированное число: {{ $randvalue }}</h2>
            <h2 class="mt-3" align="center">ID: {{ $randid }}</h2>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>