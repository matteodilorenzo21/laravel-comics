<?php

$comics = config('comics');

?>

<section>

    <div class="container">

        <div class="row">

            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>

</section>
