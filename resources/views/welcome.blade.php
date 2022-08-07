<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>seedexcellence</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main-screen.css">
    <style>
        body {
        }
    </style>
</head>
<body class="main-screen">
<div class="logo">
    <img src="/img/center-ex-logo.png" alt="">
</div>
<div class="container">
    <div class="form">
        <form action="/register-user/" method="POST">
            <div class="title">
                Поделитесь своим
                <br>мнением о мероприятии
            </div>
            <div class="form-inputs">
                @csrf
                <div class="textarea-container"><textarea placeholder="Текст" name="otz" required></textarea></div>
                <input type="text" placeholder="Имя" name="name" required>
                <input type="text" placeholder="+7 (900) 000-00-00" name="phone" required>
                <input type="text" placeholder="Хозяйство" name="hoz" required>
                <button type="submit">Готово</button>
            </div>
        </form>
    </div>
</div>
<div class="logo-syn">
    <img src="/img/syngenta-logo-blue.png" alt="">
</div>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            let viewheight = $(window).height();
            let viewwidth = $(window).width();
            let viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute("content", "height=" + viewheight + "px, width=" + viewwidth + "px, initial-scale=1.0");
        }, 300);
        $('input[name=phone]').mask('+7 (000)000-00-00')
        // $('.form').on('submit', (e) => {
        //     e.preventDefault();
        //     let otz = $('textarea[name=otz]').val();
        //     let name = $('input[name=name]').val();
        //     let phone = $('input[name=phone]').val();
        //     let hoz = $('input[name=hoz]').val();
        //     let _token = $('meta[name="csrf-token"]').attr('content');
        //     let data = {
        //         otz, name, phone, hoz, "_token": _token
        //     }
        //     console.log(data);
        //     $.ajax({
        //         method: "POST",
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         url: "/register-user",
        //         data,
        //         success: (response) => {
        //             if (response.redirect) {
        //                 window.location = response.redirect;
        //             }
        //         }
        //     })
        // })
    })
</script>
</html>
