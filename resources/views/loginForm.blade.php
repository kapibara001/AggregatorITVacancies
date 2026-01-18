<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/loginForm.css') }}">
    <title>Авторизация</title>
</head>
<body>
    <div class="log-container" style="background-image: url('{{ asset('images/authbg.jpg') }}')">
        <div class="loginForm">
            <h1>Вход</h1>
            
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required 
                        autofocus
                    >
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Пароль -->
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Запомнить меня -->
                <div class="form-group checkbox">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember"
                    >
                    <label for="remember">Запомнить меня</label>
                </div>

                <!-- Кнопка входа -->
                <button type="submit" class="btn btn-primary">Войти</button>

                <!-- Ссылки -->
                <div class="form-links">
                    <a href="">Забыли пароль?</a>
                    <a href="">Зарегистрироваться</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>