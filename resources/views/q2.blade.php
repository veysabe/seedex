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
        <form action="/q/2" method="POST">
            @csrf
            <div class="title">
                До какой стадии развития кукурузы заморозки не столь губительны, при условии, что не повреждена точка
                роста?
            </div>
            <div class="form-inputs">
                <label class="button-radio">
                    <input type="radio" name="a" value="1">
                    <div>до 3-го листа</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="2">
                    <div>до 5-го листа</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="3">
                    <div>кукурузе заморозки вообще не страшны</div>
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
