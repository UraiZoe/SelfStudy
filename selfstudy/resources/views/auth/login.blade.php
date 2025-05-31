@extends('layouts.layout')

@section('title', 'Bejelentkezés!')

@section('content')
<main class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Bejelentkezés</h2>

    {{-- Validációs hibák megjelenítése --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Bejelentkezési űrlap --}}
    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        {{-- Email mező --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email cím</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="form-control @error('email') is-invalid @enderror"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Jelszó mező --}}
        <div class="mb-3">
            <label for="password" class="form-label">Jelszó</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                class="form-control @error('password') is-invalid @enderror"
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Emlékezz rám checkbox --}}
        <div class="mb-3 form-check">
            <input
                type="checkbox"
                id="remember"
                name="remember"
                {{ old('remember') ? 'checked' : '' }}
                class="form-check-input"
            >
            <label class="form-check-label" for="remember">Emlékezz rám</label>
        </div>

        {{-- Bejelentkezés gomb --}}
        <button type="submit" class="btn btn-primary w-100">Bejelentkezés</button>

        {{-- Link a regisztrációhoz --}}
        <p class="mt-3 text-center">
            Még nincs fiókod?
            <a href="{{ route('register') }}">Regisztráció</a>
        </p>
    </form>
</main>
@endsection
