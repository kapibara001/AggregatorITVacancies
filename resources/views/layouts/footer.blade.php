<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="{{ url('/') }}" class="logo">
                <span>G<span class="ok">OK</span>KA</span>
            </a>
            <p class="desc">
                Поиск IT‑вакансий по регионам и компаниям — быстро, удобно, бесплатно.
            </p>
        </div>

        <div class="footer-links">
            <h4>Категории</h4>
            <ul>
                <li><a href="#">По профессиям</a></li>
                <li><a href="#">По компаниям</a></li>
                <li><a href="#">По городам</a></li>
                <li><a href="#">Удалённая работа</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>Ресурсы</h4>
            <ul>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Советы по собеседованию</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Помощь</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h4>Подписка</h4>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" name="email" placeholder="Ваш e‑mail" aria-label="Email" required>
                <button type="submit">Подписаться</button>
            </form>

            <div class="socials" aria-label="Социальные сети">
                <a href="#" aria-label="Telegram" class="social">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M22 2L2 9.5l5.5 1.8L9 20l3-2 5.5 4L22 2z"/></svg>
                </a>
                <a href="#" aria-label="GitHub" class="social">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 .5a12 12 0 00-3.8 23.4c.6.1.8-.3.8-.6v-2.2c-3.3.7-4-1.6-4-1.6-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1 1.6-.8 1.6-.8.8-1.4 2.1-1 2.6-.8a7 7 0 002.3-4.5c-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.4.1-2.9 0 0 1-.3 3.3 1.2a11 11 0 016 0C19 3 20 3.3 20 3.3c.6 1.5.2 2.6.1 2.9.8.8 1.3 1.9 1.3 3.2 0 4.6-2.7 5.6-5.3 5.9.7.6 1.3 1.6 1.3 3.2v4.7c0 .3.2.7.8.6A12 12 0 0012 .5z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>© {{ date('Y') }} <strong>AgregatorITVacancies</strong> — Все права защищены. <a href="#">Политика конфиденциальности</a></p>
        </div>
    </div>
</footer>