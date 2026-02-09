<div class="vacancies-container">
    <div class="vacancies-content">
        <div class="filters-cont">
            @include('layouts.filters')
        </div>

        <div class="vacancies-cont">
            @foreach ($data as $vacancy)
                <div class="vacancy-container">
                    <div class="vacancy">
                        <div class="vacancy-published-time">
                            
                        </div>
                        <div class="vacancy-name" title="{{ $vacancy['name'] }}">
                            {{ $vacancy['name'] }}
                        </div>
                        <div class="vacancy-salary">
                            @if(isset($vacancy['salary']) && $vacancy['salary'])
                                @if($vacancy['salary']['from'] && $vacancy['salary']['to'])
                                    {{ number_format($vacancy['salary']['from'], 0, '.', ' ') }} - {{ number_format($vacancy['salary']['to'], 0, '.', ' ') }} {{ $vacancy['salary']['currency'] }}
                                @elseif($vacancy['salary']['from'])
                                    от {{ number_format($vacancy['salary']['from'], 0, '.', ' ') }} {{ $vacancy['salary']['currency'] }}
                                @elseif($vacancy['salary']['to'])
                                    до {{ number_format($vacancy['salary']['to'], 0, '.', ' ') }} {{ $vacancy['salary']['currency'] }}
                                @else
                                    По договоренности
                                @endif
                            @else
                                По договоренности
                            @endif
                        </div>
                        <div class="vancay-employer-name">
                            <b>{{ $vacancy['employer']['name'] }}</b>
                        </div>
                        <div class="vacancy-city">
                            {{ $vacancy['area']['name'] }}
                        </div>
                        <div class="vacancy-description">
                            {{-- {{ $vacancy['description'] }} --}}
                        </div>
                        <div class="site-cont">
                            {{ $site }}
                        </div>
                        @auth
                            <a href="{{ $vacancy['apply_alternate_url'] }}">
                                <button>
                                    <span>Подать заявку</span>
                                </button>
                            </a>   
                            {{--  {{ $vacancy['published_at'] }} --}}
                        @endauth
                        @guest
                            <a>
                                <button class="authbutton">
                                    <span>Подать заявку</span>
                                </button>
                            </a>
                        @endguest
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pagination-container">
        <div class="pagination">
            <a href="#" class="pagination-btn pagination-prev" title="Предыдущая страница">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </a>

            <span class="pagination-page active">1</span>
            <a href="#" class="pagination-page">2</a>
            <a href="#" class="pagination-page">3</a>
            <a href="#" class="pagination-page">4</a>
            <a href="#" class="pagination-page">5</a>
            <span class="pagination-dots">...</span>
            <a href="#" class="pagination-page">10</a>

            <a href="#" class="pagination-btn pagination-next" title="Следующая страница">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.authbutton').forEach(btn => {
        btn.addEventListener('click', function() {
            showRegModal();
        });       
    });

    // Reset filters in sidebar
    const resetFiltersBtn = document.getElementById('reset-filters-sidebar');
    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', function() {
            document.getElementById('filters-sidebar-form').reset();
            window.location.href = "{{ route('mainPage') }}";
        });
    }
</script>

