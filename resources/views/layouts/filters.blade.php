<!-- Filters Modal -->
<div id="filters-modal" class="filters-modal">
    <div class="filters-container">
        <div class="filters-header">
            <h2>Фильтры поиска</h2>
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
                    {{-- <select class="salary-input-group salary-currency" name="currency" id="currency">
                        <option value="">Выберите валюту...</option>
                        <option value="RUR">РУБ</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="KZT">KZT</option>
                        <option value="BYN">BYN</option>
                        <option value="AZN">AZN</option>
                    </select> --}}
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