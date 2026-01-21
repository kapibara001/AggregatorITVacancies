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
                    <span id="password-match-error" class="error-message" style="display: none;">Пароли не совпадают</span>
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
                <button type="submit" class="btn btn-primary" id="submit-btn">Зарегистрироваться</button>

                <!-- Ссылка -->
                <div class="form-links">
                    <a href="{{ route('login') }}">Уже есть аккаунт? Войти</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');
        const passwordMatchError = document.getElementById('password-match-error');
        const submitBtn = document.getElementById('submit-btn');
        const registerForm = document.querySelector('form');

        // Проверка совпадения паролей при вводе
        function checkPasswordsMatch() {
            if (passwordConfirmInput.value && passwordInput.value !== passwordConfirmInput.value) {
                passwordMatchError.style.display = 'block';
                passwordConfirmInput.classList.add('is-invalid');
                submitBtn.disabled = true;
                return false;
            } else {
                passwordMatchError.style.display = 'none';
                passwordConfirmInput.classList.remove('is-invalid');
                submitBtn.disabled = false;
                return true;
            }
        }

        passwordInput.addEventListener('input', checkPasswordsMatch);
        passwordConfirmInput.addEventListener('input', checkPasswordsMatch);

        // Проверка перед отправкой формы
        registerForm.addEventListener('submit', function(e) {
            if (!checkPasswordsMatch()) {
                e.preventDefault();
                alert('Пароли не совпадают!');
            }
        });
    </script>
</body>
</html>