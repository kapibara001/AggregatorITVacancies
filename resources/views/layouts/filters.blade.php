<!-- Filters Modal -->
<div id="filters-modal" class="filters-modal" aria-hidden="true">
    <div class="filters-container">
        <div class="filters-header">
            <h2>Фильтры поиска</h2>
            <button class="close-filters" id="close-filters" aria-label="Закрыть фильтры">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <form id="filters-form" method="GET" action="{{ route('mainPage') }}" class="filters-form">
            <!-- Salary Filter -->
            <div class="filter-section">
                <label class="filter-title">Зарплата (РУБ)</label>
                <div class="salary-inputs">
                    <div class="salary-input-group">
                        <input type="number" name="salary_from" id="salary_from" placeholder="От" min="0" 
                            value="{{ request('salary_from') }}" class="filter-input">
                    </div>
                    <span class="salary-separator">–</span>
                    <div class="salary-input-group">
                        <input type="number" name="salary_to" id="salary_to" placeholder="До" min="0" 
                            value="{{ request('salary_to') }}" class="filter-input">
                    </div>
                    <select class="salary-input-group salary-currency" name="currency" id="currency">
                        <option value="">Выберите валюту...</option>
                        <option value="RUR">РУБ</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="KZT">KZT</option>
                        <option value="BYN">BYN</option>
                        <option value="AZN">AZN</option>
                    </select>
                </div>
            </div>

            <!-- City Filter -->
            <div class="filter-section">
                <label class="filter-title">Город</label>
                <select name="city" id="city" class="filter-select">
                    <option value="">Выберите город...</option>
                    <option value="1">Москва</option>
                    <option value="2">Санкт-Петербург</option>
                    <option value="3">Екатеринбург</option>
                    <option value="4">Новосибирск</option>
                    <option value="5">Казань</option>
                    <option value="45">Геленджик</option>
                    <option value="62">Тверь</option>
                    <option value="99">Все города</option>
                </select>
            </div>

            <!-- Experience Filter -->
            <div class="filter-section">
                <label class="filter-title">Опыт работы</label>
                <div class="filter-checkboxes">
                    <label class="checkbox-label">
                        <input type="checkbox" name="experience[]" value="noExperience" 
                            @if(in_array('noExperience', (array)request('experience', []))) checked @endif>
                        <span>Без опыта</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="experience[]" value="between1And3" 
                            @if(in_array('between1And3', (array)request('experience', []))) checked @endif>
                        <span>1-3 года</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="experience[]" value="between3And6" 
                            @if(in_array('between3And6', (array)request('experience', []))) checked @endif>
                        <span>3-6 лет</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="experience[]" value="moreThan6" 
                            @if(in_array('moreThan6', (array)request('experience', []))) checked @endif>
                        <span>Более 6 лет</span>
                    </label>
                </div>
            </div>

            <!-- Employment Type Filter -->
            <div class="filter-section">
                <label class="filter-title">Тип занятости</label>
                <div class="filter-checkboxes">
                    <label class="checkbox-label">
                        <input type="checkbox" name="employment[]" value="full_time" 
                            @if(in_array('full_time', (array)request('employment', []))) checked @endif>
                        <span>Полная занятость</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="employment[]" value="part_time" 
                            @if(in_array('part_time', (array)request('employment', []))) checked @endif>
                        <span>Неполная занятость</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="employment[]" value="project" 
                            @if(in_array('project', (array)request('employment', []))) checked @endif>
                        <span>Проектная работа</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="employment[]" value="temporary" 
                            @if(in_array('temporary', (array)request('employment', []))) checked @endif>
                        <span>Временная работа</span>
                    </label>
                </div>
            </div>

            <!-- Schedule Filter -->
            <div class="filter-section">
                <label class="filter-title">График работы</label>
                <div class="filter-checkboxes">
                    <label class="checkbox-label">
                        <input type="checkbox" name="schedule[]" value="full_day" 
                            @if(in_array('full_day', (array)request('schedule', []))) checked @endif>
                        <span>Полный день</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="schedule[]" value="shift" 
                            @if(in_array('shift', (array)request('schedule', []))) checked @endif>
                        <span>Сменный график</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="schedule[]" value="flexible" 
                            @if(in_array('flexible', (array)request('schedule', []))) checked @endif>
                        <span>Гибкий график</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" name="schedule[]" value="remote" 
                            @if(in_array('remote', (array)request('schedule', []))) checked @endif>
                        <span>Удаленная работа</span>
                    </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="filters-actions">
                <button type="button" id="reset-filters" class="btn btn-secondary">Очистить фильтры</button>
                <button type="submit" class="btn btn-primary">Применить фильтры</button>
            </div>
        </form>
    </div>
</div>

<style>
    .filters-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        animation: fadeIn 0.3s ease-in-out;
    }

    .filters-modal.active {
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            transform: translateY(100%);
        }
        to {
            transform: translateY(0);
        }
    }

    .filters-container {
        background: white;
        border-radius: 16px 16px 0 0;
        max-width: 100%;
        width: max-content;
        max-height: 90vh;
        overflow-y: auto;
        animation: slideUp 0.3s ease-in-out;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
    }

    .filters-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #e5e5e5;
        position: sticky;
        top: 0;
        background: white;
        border-radius: 16px 16px 0 0;
    }

    .filters-header h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    .close-filters {
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        transition: background 0.2s;
    }

    .close-filters:hover {
        background: #f0f0f0;
    }

    .filters-form {
        padding: 20px;
    }

    .filter-section {
        margin-bottom: 24px;
    }

    .filter-title {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-bottom: 12px;
    }

    .salary-inputs {
        display: flex;
        gap: 10px;
        align-items: flex-end;
    }

    .salary-input-group {
        flex: 1;
        min-width: 0;
    }

    .salary-inputs .salary-input-group:nth-child(3) {
        flex: 0 0 auto;
        max-width: 90px;
    }

    .salary-currency {
        text-align: center;
    }

    .salary-separator {
        color: #999;
        font-weight: 500;
        font-size: 16px;
        padding: 0 2px;
        margin-bottom: 0;
        line-height: 1;
    }

    .filter-input,
    .filter-select {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        font-family: inherit;
        transition: border-color 0.2s;
    }

    .filter-input:focus,
    .filter-select:focus {
        outline: none;
        border-color: #0066cc;
        box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
    }

    .filter-checkboxes {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        user-select: none;
        font-size: 14px;
        color: #333;
        gap: 8px;
    }

    .checkbox-label input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #0066cc;
    }

    .checkbox-label:hover {
        color: #0066cc;
    }

    .filters-actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
        padding-top: 20px;
        border-top: 1px solid #e5e5e5;
    }

    .btn {
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        flex: 1;
    }

    .btn-primary {
        background: #0066cc;
        color: white;
    }

    .btn-primary:hover {
        background: #0052a3;
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #333;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e5e5e5;
    }

    @media (min-width: 768px) {
        .filters-modal.active {
            align-items: center;
            justify-content: center;
        }

        .filters-container {
            border-radius: 16px;
            max-width: 500px;
            max-height: 80vh;
            animation: slideDown 0.3s ease-in-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .filters-header {
            border-radius: 16px 16px 0 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filtersModal = document.getElementById('filters-modal');
        const filterBtn = document.getElementById('filter-btn');
        const closeFiltersBtn = document.getElementById('close-filters');
        const resetFiltersBtn = document.getElementById('reset-filters');
        const filtersForm = document.getElementById('filters-form');

        // Open filters modal
        if (filterBtn) {
            filterBtn.addEventListener('click', function() {
                filtersModal.classList.add('active');
                filtersModal.setAttribute('aria-hidden', 'false');
            });
        }

        // Close filters modal
        closeFiltersBtn.addEventListener('click', function() {
            filtersModal.classList.remove('active');
            filtersModal.setAttribute('aria-hidden', 'true');
        });

        // Close on backdrop click
        filtersModal.addEventListener('click', function(e) {
            if (e.target === filtersModal) {
                filtersModal.classList.remove('active');
                filtersModal.setAttribute('aria-hidden', 'true');
            }
        });

        // Reset filters
        resetFiltersBtn.addEventListener('click', function() {
            filtersForm.reset();
            // Optionally redirect to mainPage without filters
            window.location.href = "{{ route('mainPage') }}";
        });
    });
</script>
