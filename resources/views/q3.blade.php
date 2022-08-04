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

                LOREM IPSUM GENERATOR
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla
            </div>
            <div class="form-inputs">
                <label class="button-radio">
                    <input type="radio" name="a" value="1">
                    <div>Вариант 1</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="2">
                    <div>Вариант 2</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="3">
                    <div>Вариант 3</div>
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
