<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="{{ asset('css/navigationPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vacancies.css') }}">
</head>
<body>
    <div class="container">
        @include('layouts.navigation')  
        <!-- Vacancies -->
        @include('layouts.vacancies')
        <hr>
        <!-- Footer  -->
        @include('layouts.footer')
    </div>

    <script>
        // Code for view window-offer to register/login
    </script>
</body>
</html>