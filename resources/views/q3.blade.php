<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>seedexcellence</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/q-screen.css">
    <style>
        body {
        }
    </style>
</head>
<body class="q-screen">
<div class="logo">
    <img src="/img/center-ex-logo.png" alt="">
</div>
<div class="container">
    <div class="form">
        <form action="/q/3" method="POST">
            @csrf
            <div class="title">
                Какой бесплатный сервис предлагает Сингента, для подбора гибридов, которые идеально подойдут для Ваших
                полей и технологии возделывания?
            </div>
            <div class="form-inputs">
                <label class="button-radio">
                    <input type="radio" name="a" value="1">
                    <div>Агриклайм</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="2">
                    <div>Сид Селектор</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="3">
                    <div>Солгард</div>
                </label>
                <button>Готово</button>
            </div>
        </form>
    </div>
</div>
<div class="logo-syn">
    <img src="/img/syngenta-logo-wb.png" alt="">
</div>
</body>
</html>
