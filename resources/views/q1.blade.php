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
        <form action="/q/1" method="POST">
            @csrf
            <div class="title">
                Какой тип пестицидов можно cмешивать с гербицидом КАПТОРА® ПЛЮС?
            </div>
            <div class="form-inputs">
                <label class="button-radio">
                    <input type="radio" name="a" value="1">
                    <div>Микроэлементы</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="2">
                    <div>Этого делать нельзя</div>
                </label>
                <label class="button-radio">
                    <input type="radio" name="a" value="3">
                    <div>Фунгициды</div>
                </label>
                <button>Готово</button>
            </div>
        </form>
    </div>
</div>
<div class="logo-syn">
    <img src="/img/syngenta-logo-wb.png" alt="">
</div>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
    // document.addEventListener('DOMContentLoaded', function () {
    //     $('.form').on('submit', (e) => {
    //         e.preventDefault();
    //         let _token = $('meta[name="csrf-token"]').attr('content');
    //         let answer = $('input[type=radio]:checked').val();
    //         let data = {
    //             answer, '_token': _token
    //         }
    //         console.log(data);
    //         $.ajax({
    //             method: "POST",
    //             url: "/q/1",
    //             headers: {
    //                 'X-CSRF-TOKEN': _token
    //             },
    //             data,
    //             success: (response) => {
    //                 window.location = '/q2';
    //             }
    //         })
    //     })
    // })
</script>
</html>
