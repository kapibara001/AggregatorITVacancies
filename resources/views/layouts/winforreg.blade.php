<div id="regModal" class="reg-modal" style="display: none;">
    <div class="reg-modal-overlay"></div>
    <div class="reg-modal-container">
        <button class="reg-modal-close" aria-label="Закрыть">&times;</button>
        
        <div class="reg-modal-header">
            <div class="reg-modal-icon">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="16" r="8" fill="#007bff"/>
                    <path d="M10 36C10 28.27 16.49 22 24 22C31.51 22 38 28.27 38 36" fill="#007bff"/>
                </svg>
            </div>
            <h2>Присоединяйтесь к нам</h2>
            <p>Создайте аккаунт, чтобы откликаться на вакансии</p>
        </div>

        <div class="reg-modal-benefits">
            <div class="benefit-item">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="#28a745"/>
                    </svg>
                </div>
                <span>Откликайтесь на вакансии</span>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="#28a745"/>
                    </svg>
                </div>
                <span>Сохраняйте интересующие вакансии</span>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="#28a745"/>
                    </svg>
                </div>
                <span>Получайте уведомления о новых предложениях</span>
            </div>
        </div>

        <div class="reg-modal-actions">
            <a href="#" class="reg-btn reg-btn-primary">Зарегистрироваться</a>
            <a href="{{ route('login_window') }}" class="reg-btn reg-btn-secondary">Уже есть аккаунт? Войти</a>
        </div>

        <div class="reg-modal-footer">
            <p>Мы не спамим и не передаем данные третьим лицам</p>
        </div>
    </div>
</div>

<script>
    (function() {
        const regModal = document.getElementById('regModal');
        const closeBtn = document.querySelector('.reg-modal-close');
        const overlay = document.querySelector('.reg-modal-overlay');

        // Закрытие по кнопке
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                hideRegModal();
            });
        }

        // Закрытие по клику на оверлей
        if (overlay) {
            overlay.addEventListener('click', function() {
                hideRegModal();
            });
        }

        // Экспортируем функцию для показа модала
        window.showRegModal = function() {
            if (regModal) {
                regModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        };

        // Экспортируем функцию для скрытия модала
        window.hideRegModal = function() {
            if (regModal) {
                regModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        };

        // // Показываем модал при загрузке страницы
        // document.addEventListener('DOMContentLoaded', function() {
        //     showRegModal();
        // });
    })();
</script>