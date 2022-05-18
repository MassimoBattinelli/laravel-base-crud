<div class="main">
    @foreach ($comics as $comic)
        <div class="card">
            <a href="{{ route('comics.show', $comic->id) }}">
                <div class="thumb">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <h4>
                    {{ $comic['title'] }}
                </h4>
                
                <p>
                    {{ $comic['series'] }}
                </p>

                <div>
                    {{ $comic['price'] }}
                    <span>
                        €
                    </span>
                </div>
            </a>
        </div>
    @endforeach
</div>