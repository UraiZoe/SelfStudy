<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        // Példa: minden usert lekérdezünk, és visszaküldjük egy nézetnek
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        // Itt visszatérünk egy form nézethez, ahol új usert lehet felvinni
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        // Validálás
        $data = $request->validate([
            'username'         => 'required|string|max:100|unique:users,username',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|string|min:8|confirmed',
            'phone'            => 'nullable|string|max:15',
            'realname'         => 'nullable|string|max:100',
            'profile_picture'  => 'nullable|string',
            'age'              => 'nullable|integer|min:0',
            'role'             => 'required|in:student,teacher,moderator,admin',
            'level_id'         => 'nullable|exists:levels,id',
            'study_set_id'     => 'nullable|exists:study_sets,id',
            'attempt_id'       => 'nullable|exists:attempts,id',
        ]);

        // Jelszó hashelése
        $data['password'] = bcrypt($data['password']);

        // User mentése
        User::create($data);

        // Visszairányítás index-re, vagy bárhová, flash üzenettel
        return redirect()->route('users.index')
                         ->with('success', 'Felhasználó sikeresen létrehozva.');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        // Megmutatjuk az egyes user adatait
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        // Visszatérünk egy szerkesztő űrlappal
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validálás (például az email csak akkor egyedi, ha nem a saját rekordjához tartozik)
        $data = $request->validate([
            'username'         => 'required|string|max:100|unique:users,username,' . $user->id,
            'email'            => 'required|email|unique:users,email,' . $user->id,
            'password'         => 'nullable|string|min:8|confirmed',
            'phone'            => 'nullable|string|max:15',
            'realname'         => 'nullable|string|max:100',
            'profile_picture'  => 'nullable|string',
            'age'              => 'nullable|integer|min:0',
            'role'             => 'required|in:student,teacher,moderator,admin',
            'level_id'         => 'nullable|exists:levels,id',
            'study_set_id'     => 'nullable|exists:study_sets,id',
            'attempt_id'       => 'nullable|exists:attempts,id',
        ]);

        // Ha új jelszót adtak meg, azt hash-eljük
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            // Ha nem kértek jelszóváltoztatást, töröljük a tömbből, hogy ne írja felül
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.index')
                         ->with('success', 'Felhasználó adatai frissítve.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                         ->with('success', 'Felhasználó törölve.');
    }
}
