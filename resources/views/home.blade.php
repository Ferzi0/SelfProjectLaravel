<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
         <img src="{{ Vite::asset('resources/img/07ec2dae56ee4cd3bbdf243ae1345af1.svg') }}">
         <h1>Самостоятельный проект</h1>
         <div>
            <a href="/array.blade.php">Переход на вторую</a>
         </div>
    </header>
    <Main>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem assumenda natus neque nobis inventore praesentium sunt dolores consectetur rem possimus iure officiis temporibus ullam, corporis similique iusto voluptatum non. Fugit?</p>
        <p>Тут вы можете видеть набор красивых фото из интернета.</p>
        <img src="{{ Vite::asset('resources/img/506588ece3.jpg') }}">
        <img src="{{ Vite::asset('resources/img/convert_to_jpg.png') }}">
        <img src="{{ Vite::asset('resources/img/raw-vs-jpg-vojna-formatov_07.jpg') }}">
        <img src="{{ Vite::asset('resources/img/zakat-v-webm.jpg') }}">
    </Main>
    <footer>
        Copyright, Торгашов 2025 год
    </footer>
</body>
</html>