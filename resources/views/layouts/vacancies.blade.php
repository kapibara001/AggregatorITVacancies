<div class="vacancies-container">
    <div class="vacancies-content">
        @foreach ($data as $vacancy)
            <div class="vacancy-container">
                <div class="vacancy">
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
                                З/П не указана
                            @endif
                        @else
                            З/П не указана
                        @endif
                    </div>
                    <div class="vacancy-city">
                        {{ $vacancy['area']['name'] }}
                    </div>
                    <div class="site-cont">
                        {{ $site }}
                    </div>
                    @auth
                        <a href="{{ $vacancy['apply_alternate_url'] }}">
                            <button>
                                <span> Подать заявку </span>
                            </button>
                        </a>   
                    @endauth
                    @guest
                        <a>
                            <button class="authbutton">
                                <span> Подать заявку {{ $vacancy['published_at'] }}</span>
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
        @endforeach
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
</script>

