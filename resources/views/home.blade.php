<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container2">

        <div class="header">
            <h1>Шапка</h1>
            <img class="logo" src="{{ Vite::asset('resources/img/07ec2dae56ee4cd3bbdf243ae1345af1.svg') }}" alt="логотип">
        </div>
        <br>
        <div class="main">
            <h1>Контент часть</h1>
            <img class="img2" src="{{ Vite::asset('resources/img/506588ece3.jpg') }}" alt="чак">
            <img class="img2" src="{{ Vite::asset('resources/img/convert_to_jpg.png') }}" alt="чак">
            <p>Пункт 1</p>
            <p>Пункт 2</p>
            <p>Пункт 3</p>
        </div>
        <br>
        <div class="footer">
            <h1>Подвал</h1>
            <p>Торгашов Эдуард Ринатович 2025</p>
        </div>

    </div>
</body>
</html>