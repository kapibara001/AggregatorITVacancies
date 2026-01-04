<!-- Navigation partial — edit this file to change site header -->
<header>
    <div class="header-cont">
        <a href="{{ route('mainPage') }}" class="GEKKI-Logo">
            <img src="" alt="Logo" class="" onerror="this.style.display='none'">
            <span class="logo">GEKKI</span>
        </a>

        <form action="" method="GET" class="search-block">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Поиск вакансий, компаний или навыков" class="" id="searcher"/>
            <button type="submit" class="">Найти</button>
        </form>

        <nav class="links">
            <a href="" >Главная</a>
            <a href="">Вакансии</a>
            <a href="">Компании</a>
            <a href="">О проекте</a>

            @guest
                <a href="" class="">Войти</a>
                <a href="" class="">Регистрация</a>
            @else
                <a href="" class="">Профиль</a>
            @endguest
        </nav>

        {{-- Mobile search / menu can be added later for responsiveness --}}
    </div>
</header>