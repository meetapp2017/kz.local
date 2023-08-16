<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kazanlachani.com</title>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="links">
                <a href="home">Начало</a>
                <a href="items">Обяви</a>

                @if (!Session()->has('user'))
                    <a href="login">Вход</a>
                @endif

                @if (!Session()->has('user'))
                    <a href="register">Регистарция</a>
                @endif

                <a href="contacts">Контакти</a>
                <a href="about">За нас</a>
                @if (Session()->has('user'))
                    <a href="logout">LogOut - {{ Session::get('user')->username }}</a>
                @endif
            </div>

            <div class="title m-b-md">
                <div class="alert alert-primary" role="alert">
                    Kazanlachani.com
                </div>
            </div>

            @yield('main-content')
        </div>
    </div>
</body>


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/main.css') }}">
{{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/main.js') }}"></script> --}}


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="{{ mix('js/app.js') }}"></script>

</html>
