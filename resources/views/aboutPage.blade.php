<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О проекте</title>
    <link rel="stylesheet" href="{{ asset('css/navigationPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vacancies.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutPage.css') }}">
</head>
<body>
    <div class="container">
        {{-- header --}}
        @include('layouts.navigation')  

        <!-- About Section -->
        <main class="about-section">
            <div class="about-hero">
                <h1>О проекте</h1>
                <p class="subtitle">Ваш персональный агрегатор IT вакансий</p>
            </div>

            <div class="about-content">
                <section class="about-card">
                    <h2>Что такое GOKKA</h2>
                    <p>
                        Это удобный инструмент для поиска IT вакансий со всех популярных сайтов в одном месте. 
                        Мы собираем вакансии с <strong>hh.ru</strong> и других ведущих платформ поиска работы, 
                        чтобы вам не пришлось посещать каждый сайт отдельно.
                    </p>
                </section>

                <section class="about-card">
                    <h2>Основные возможности</h2>
                    <ul class="features-list">
                        <li>
                            <span class="feature-icon">🔍</span>
                            <div>
                                <h3>Умный поиск</h3>
                                <p>Ищите вакансии по вашим критериям: зарплата, опыт, стек технологий</p>
                            </div>
                        </li>
                        <li>
                            <span class="feature-icon">📍</span>
                            <div>
                                <h3>Фильтрация по местоположению</h3>
                                <p>Найдите вакансии в нужном городе или работу удаленно</p>
                            </div>
                        </li>
                        <li>
                            <span class="feature-icon">💼</span>
                            <div>
                                <h3>Множество источников</h3>
                                <p>Вакансии собираются с различных популярных сайтов найма</p>
                            </div>
                        </li>
                        <li>
                            <span class="feature-icon">⚡</span>
                            <div>
                                <h3>Быстрый результат</h3>
                                <p>Получите результаты поиска за считанные секунды</p>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="about-card">
                    <h2>Как это работает?</h2>
                    <ol class="steps-list">
                        <li>
                            <span class="step-number">1</span>
                            <p>Перейдите на главную страницу и установите параметры поиска</p>
                        </li>
                        <li>
                            <span class="step-number">2</span>
                            <p>Выберите интересующую вас категорию и специализацию</p>
                        </li>
                        <li>
                            <span class="step-number">3</span>
                            <p>Получите список всех доступных вакансий из всех источников</p>
                        </li>
                        <li>
                            <span class="step-number">4</span>
                            <p>Кликните на интересующую вакансию и перейдите к ее полному описанию</p>
                        </li>
                    </ol>
                </section>

                <section class="about-card cta-section">
                    <h2>Готовы начать поиск?</h2>
                    <p>Найдите вашу идеальную IT вакансию прямо сейчас</p>
                    <a href="{{ route('mainPage') }}" class="cta-button">Перейти на главную</a>
                </section>
            </div>
        </main>

        <!-- Footer  -->
        @include('layouts.footer')
    </div>

    <script>
        // Code for view window-offer to register/login
    </script>
</body>
</html>