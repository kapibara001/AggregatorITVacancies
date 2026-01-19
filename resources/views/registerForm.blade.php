<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registrationForm.css') }}">
    <title>Регистрация</title>
</head>
<body>
    <div class="reg-container" style="background-image: url('{{ asset('images/authbg.jpg') }}')">
        <div class="registerForm">
            <h1>Регистрация</h1>
            
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('registration') }}">
                @csrf

                <!-- Имя -->
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        required 
                        autofocus
                    >
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

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

                <!-- Подтверждение пароля -->
                <div class="form-group">
                    <label for="password_confirmation">Подтверждение пароля</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        required
                    >
                    @error('password_confirmation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Согласие с условиями -->
                <div class="form-group checkbox">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms"
                        required
                    >
                    <label for="terms">Я согласен с условиями использования</label>
                </div>

                <!-- Кнопка регистрации -->
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>

                <!-- Ссылка -->
                <div class="form-links">
                    <a href="{{ route('login') }}">Уже есть аккаунт? Войти</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>