@extends("layouts.layout")
<!-- Fejléc kiszedés -->

@section("title", "Welcome!")
<!-- Cím adás az oldalnak változó által -->

@section("content")
    <!-- Kontent kiszedés -->
    <main class="hover-text-container">
        <h1 class="text-normal">Welcome!</h1>
        <h1 class="text-hover">Köszöntelek!</h1><br>

        <div class="align-items-center">
            <div class="card px-3 px-md-5 mt-5 mb-5 mx-auto" style="max-width: 90%;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam possimus totam, explicabo nisi error
                    fugit quas, nam repudiandae laudantium rem delectus! Nihil atque distinctio quidem commodi, vel
                    similique quisquam consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ex
                    pariatur hic numquam vero doloremque illum libero eum, tempore corrupti! Enim esse voluptatum architecto
                    quaerat, eum earum voluptatem rerum reprehenderit.</p>

            </div>
        </div><br>
        <!-- Menüpont az oldalak között(Adományozok, Szalonok, Események) -->
        <div id="ThirdContentMainPage" class="d-flex justify-content-center gap-4 flex-wrap">
            <div id="buttonImage" class="card text-center">
                <a href="/games">
                    <img src="{{ asset('images/game.png') }}" class="card-img-top" alt="games">
                </a>
                <div class="card-body">
                    <a id="button" href="/games" class="btn btn-dark">Játékok/Games</a>
                </div>
            </div>

            <div id="buttonImage" class="card text-center">
                <a href="/quiz">
                    <img src="{{ asset('images/quiz.png') }}" class="card-img-top" alt="quiz">
                </a>
                <div class="card-body">
                    <a id="button" href="/quiz" class="btn btn-dark">Tanulás/Study</a>
                </div>
            </div>

            <div id="buttonImage" class="card text-center">
                <a href="/chat">
                    <img src="{{ asset('images/chat.png') }}" class="card-img-top" alt="chat">
                </a>
                <div class="card-body">
                    <a id="button" href="/chat" class="btn btn-dark">Beszélgetés</a>
                </div>
            </div>
        </div>
    </main>
@endsection
<!-- Lezárás -->