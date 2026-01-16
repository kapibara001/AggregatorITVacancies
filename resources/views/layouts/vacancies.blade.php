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
                                <span> Подать заявку </span>
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('.authbutton').forEach(btn => {
        btn.addEventListener('click', function() {
            showRegModal();
        });       
    });
</script>

