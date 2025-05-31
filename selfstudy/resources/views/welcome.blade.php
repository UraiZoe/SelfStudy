@extends("layouts.layout")
<!-- Fejléc kiszedés -->

@section("title", "Welcome!")
<!-- Cím adás az oldalnak változó által -->

@section("content")
    <!-- Kontent kiszedés -->
    <main>
        <h1>Köszöntelek!🐈‍⬛</h1><br>
        <div class="d-flex justify-content-center gap-4 flex-wrap card text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam possimus totam, explicabo nisi error fugit quas, nam repudiandae laudantium rem delectus! Nihil atque distinctio quidem commodi, vel similique quisquam consequatur.</p>
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