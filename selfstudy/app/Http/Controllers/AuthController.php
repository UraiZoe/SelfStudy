<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Regisztrációs űrlap megjelenítése.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Regisztráció kezelése.
     */
    public function register(Request $request)
    {
        // Adatok validálása
        $data = $request->validate([
            'username' => 'required|string|max:100|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Jelszó hashelése és felhasználó mentése
        $user = User::create([
            'username' => $data['username'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            // Ha vannak egyéb mezőid, pl. 'role' vagy 'age', pótold itt
        ]);

        // Automatikus beléptetés regisztráció után
        Auth::login($user);

        // Átirányítás valahova (pl. kezdőlapra vagy dashboardra)
        return redirect()->intended('/');
    }

    /**
     * Bejelentkezési űrlap megjelenítése.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Bejelentkezés kezelése.
     */
    public function login(Request $request)
    {
        // Adatok validálása
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Próbáljuk meg beléptetni
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Ha sikerült, regeneráljuk a session‐t (biztonsági okból)
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // Ha sikertelen, vissza a login űrlapra hibaüzenettel
        return back()->withErrors([
            'email' => 'A megadott hitelesítő adatok nem találhatók.',
        ])->withInput([
            'email' => $request->email,
        ]);
    }

    /**
     * Kilépés (logout).
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Új session token generálása
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
