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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Courgette|Didact+Gothic" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>
    <div id="app" class="app">

        <div class="bg">
            <img src="/images/bg/@yield('bg').jpg" class="bg">
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
                <a href="https://www.facebook.com/yeshidressing" target="_blank" class="icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/yeshidressing/" target="_blank" class="icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
