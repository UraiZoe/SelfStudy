@extends("gamingLayouts.layout")
<!-- Fejléc kiszedés -->

@section("title", "Üdvözlünk!")
<!-- Cím adás az oldalnak változó által -->

@section("content")
    <!-- Kontent kiszedés -->
    <main>
        <h1>Ez a fő oldal a játékoknál!</h1>
        <div class="container my-4">
            <div class="row g-4">
                <!-- 1. Card -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <!-- Kép a kártya tetején -->
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kép leírása">
                        <div class="card-body d-flex flex-column">
                            <!-- Leírás -->
                            <p class="card-text">Ha csak szavakat szeretnél gyakorolni!
                            </p>
                            <a href="/quiz" class="btn btn-dark mt-auto">Részletek</a>
                        </div>
                    </div>
                </div>

                <!-- 2. Card -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kép leírása">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Ha számolni szeretnél megtanulni!
                            </p>
                            <a href="/games/numberCalculation" class="btn btn-dark mt-auto">Részletek</a>
                        </div>
                    </div>
                </div>

                <!-- 3. Card -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kép leírása">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Ha megszeretnéd tanulni az alapanyogokat, vagy ételeket!</p>
                            <a href="/games/cooking" class="btn btn-dark mt-auto">Részletek</a>
                        </div>
                    </div>
                </div>

                <!-- 4. Card -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kép leírása">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">És, ha megszeretnéd tanulni az írányokat!</p>
                            <a href="/games/map" class="btn btn-dark mt-auto">Részletek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<!-- Lezárás -->