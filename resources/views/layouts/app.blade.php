<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Yeshi Dressing</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Source+Sans+Pro|Courgette" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>
    <div id="app" class="app">

        <div class="bg-container">
            <div class="bg">
                <img src="/images/bg/@yield('bg').jpg" class="bg">
            </div>
        </div>

        <div class="bg-container-blur">
            <div class="bg-blur">
                <img src="/images/bg/@yield('bg').jpg" class="bg-blur">
            </div>
        </div>

        <div class="header" id="header">

            <div class="logo">
                <a href="{{ route('home') }}"><img src="/images/logo_white.png" class="logo"></a>
            </div>

            <div class="menu">
                <a href="{{ route('contact') }}" class="menu-item">Contact</a>
            </div>

        </div>


        <div class="content">
            @yield ('content')
        </div>


        <div class="footer">
            <div class="footer-email">
                <a href="mailto:info@yeshidressing.com" target="_blank">info@yeshidressing.com</a>
            </div>
            <div>&copy; {{ \Carbon\Carbon::now()->format('Y') }} Yeshi Dressing</div>
            <div class="footer-social-icons">
                <a href="https://www.facebook.com/yeshidressing" target="_blank" class="icon fa fa-facebook-official"></a>
                <a href="https://www.instagram.com/yeshidressing/" target="_blank" class="icon fa fa-instagram"></a>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
