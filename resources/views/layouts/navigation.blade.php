<!-- Navigation partial — header with responsive menu and search -->
<header class="site-header">
    <div class="container header-cont">
        <a href="{{ route('mainPage') }}" class="logo">
            <img src="{{ asset('img/logo.svg') }}" alt="AgregatorITVacancies" class="logo-img" onerror="this.style.display='none'">
            <span class="brand">G<span>OK</span>KA</span>
        </a>

        @auth
            <form action="{{ route('mainPage') }}" method="GET" class="search-block" role="search" aria-label="Поиск вакансий">
                <input type="search" name="q" placeholder="Поиск вакансий, компаний или навыков" />
                <div class="filter-btn">
                    <div style="width: 34px; aspect-ratio: 1/1; display: flex; align-items: center; justify-content: center;" id="filter-btn">
                        <img src="{{ asset('images/filter_icon_136624.svg') }}" alt="Фильтр" style="width: 28px; aspect-ratio: 1/1">
                    </div>
                </div>
                <button type="submit" class="btn search-btn">Найти</button>
            </form>
        @endauth
        @guest
            <form class="search-block" role="search" aria-label="Поиск вакансий" onsubmit="guest_user_search(); return false;">
                <input type="search" name="q" value="{{ $keyword }}" placeholder="Поиск вакансий, компаний или навыков" />
                <div class="filter-btn">
                    <div style="width: 34px; aspect-ratio: 1/1; display: flex; align-items: center; justify-content: center;" id="filter-btn">
                        <img src,="{{ asset('images/filter_icon_136624.svg') }}" alt="Фильтр" style="width: 28px; aspect-ratio: 1/1">
                    </div>
                </div>
                <button type="submit" class="btn search-btn">Найти</button>
            </form>

            <script>
                function guest_user_search() {
                    showRegModal(); 
                }
            </script>
        @endguest

        <button class="menu-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Открыть меню">
            <span class="hamburger" aria-hidden="true"></span>
        </button>

        <nav id="main-nav" class="links" role="navigation">
            <a href="#" class="nav-link">Компании</a>
            <a href="{{ route('about_project') }}" class="nav-link">О проекте</a>

            @guest
                <a href="{{ route('login_window') }}" class="btn ghost login">Войти</a>
                <a href="{{ route('register_window') }}" class="btn primary register">Регистрация</a>
            @else
                <a href="#" class="btn ghost">Профиль</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn ghost">Выйти</button>
                </form>
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