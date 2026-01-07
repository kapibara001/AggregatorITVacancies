<!-- Navigation partial — header with responsive menu and search -->
<header class="site-header">
    <div class="container header-cont">
        <a href="{{ route('mainPage') }}" class="logo">
            <img src="{{ asset('img/logo.svg') }}" alt="AgregatorITVacancies" class="logo-img" onerror="this.style.display='none'">
            <span class="brand">G<span>OK</span>KA</span>
        </a>

        <form action="{{ route('mainPage') }}" method="GET" class="search-block" role="search" aria-label="Поиск вакансий">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Поиск вакансий, компаний или навыков" />
            <button type="submit" class="btn search-btn">Найти</button>
        </form>

        <button class="menu-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Открыть меню">
            <span class="hamburger" aria-hidden="true"></span>
        </button>

        <nav id="main-nav" class="links" role="navigation">
            <a href="#" class="nav-link">Вакансии</a>
            <a href="#" class="nav-link">Компании</a>
            <a href="#" class="nav-link">О проекте</a>

            @guest
                <a href="#" class="btn ghost login">Войти</a>
                <a href="#" class="btn primary register">Регистрация</a>
            @else
                <a href="#" class="btn ghost">Профиль</a>
            @endguest
        </nav>
    </div>

    <div class="mobile-nav" id="mobile-nav" hidden>
        <form action="{{ route('mainPage') }}" method="GET" class="mobile-search" role="search">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Поиск вакансий" />
            <button type="submit" class="btn small">Найти</button>
        </form>
        <div class="mobile-links">
            <a href="#">Главная</a>
            <a href="#">Вакансии</a>
            <a href="#">Компании</a>
            <a href="#">О проекте</a>
            @guest
                <a href="#">Войти</a>
                <a href="#" class="register">Регистрация</a>
            @else
                <a href="#">Профиль</a>
            @endguest
        </div>
    </div>

    <script>
        // Toggle mobile menu
        (function(){
            const btn = document.querySelector('.menu-toggle');
            const mobile = document.getElementById('mobile-nav');
            btn && btn.addEventListener('click', function(){
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                if (mobile) {
                    if (mobile.hasAttribute('hidden')) { mobile.removeAttribute('hidden'); }
                    else { mobile.setAttribute('hidden', ''); }
                }
            });
        })();
    </script>
</header>