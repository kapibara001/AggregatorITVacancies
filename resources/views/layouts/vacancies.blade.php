<div class="vacancies-container">
    <div class="vacancies-content">
        @foreach ($data as $vacancy)
            <div class="vacancy-container">
                <div class="vacancy">
                    <div class="vacancy-name">
                        {{ $vacancy['name'] }}
                    </div>
                    <div class="vacancy-salary">
                        {{-- salary from-to  --}}
                    </div>
                    <div class="vacancy-city">
                        {{ $vacancy['area']['name'] }}
                    </div>
                    <a href="{{ $vacancy['apply_alternate_url'] }}">
                        <button>
                            <span> Подать заявку </span>
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>