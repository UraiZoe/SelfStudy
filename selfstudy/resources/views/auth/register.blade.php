@extends("layouts.layout")
<!-- Fejléc kiszedés -->
 
@section("title", "Regisztráció!")
<!-- Cím adás az oldalnak változó által -->

@section("content")
    <!-- Kontent kiszedés -->
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Regisztráció</h2>

    <!-- Ha vannak validációs hibák -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Regisztrációs űrlap -->
    <form method="POST" action="{{ route('register.post') }}">
        @csrf

        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Felhasználónév</label>
            <input type="text"
                   class="form-control @error('username') is-invalid @enderror"
                   id="username"
                   name="username"
                   value="{{ old('username') }}"
                   required
                   autofocus>
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email cím</label>
            <input type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   id="email"
                   name="email"
                   value="{{ old('email') }}"
                   required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jelszó -->
        <div class="mb-3">
            <label for="password" class="form-label">Jelszó</label>
            <input type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   id="password"
                   name="password"
                   required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jelszó ismét -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Jelszó újra</label>
            <input type="password"
                   class="form-control"
                   id="password_confirmation"
                   name="password_confirmation"
                   required>
        </div>

        <!-- Regisztráció gomb -->
        <button type="submit" class="btn btn-primary w-100">Regisztráció</button>

        <!-- Link a bejelentkezéshez, ha már van fiókja -->
        <p class="mt-3 text-center">
            Van már fiókod?
            <a href="{{ route('login') }}">Bejelentkezés</a>
        </p>
    </form>
</div>
@endsection
<!-- Lezárás -->