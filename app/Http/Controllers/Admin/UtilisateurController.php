<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UtilisateurStoreRequest;
use App\Http\Requests\UtilisateurUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $roles = Role::create();
        // return view ('', [
        //     'utilisateur' => new Utilisateur(),
        //     'roles' => $roles-> Role::class,
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UtilisateurStoreRequest $request)
    {
        // Utilisateur::create($request->validated());

        // return redirect()
        //     ->route('')
        //     ->with('success', 'Vous êtes enregistré');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // $roles = Role::all();
        return view('admin.users', compact("users"), [
            // 'roles' => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // $roles = Role::all();
        return view('admin.users.form', [
            'user' => $user,
            // 'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UtilisateurUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()
            ->route('user.index')
            ->with('success', "Vos informations ont été modifiés");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', "L'utilsateur a été supprimé");
    }
}
