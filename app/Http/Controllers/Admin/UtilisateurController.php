<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurStoreRequest;
use App\Http\Requests\UtilisateurUpdateRequest;
use App\Models\Role;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('admin.users.index', compact('utilisateurs'));
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
    public function show(Utilisateur $utilisateur)
    {
        $roles = Role::all();
        return view('admin.users', compact("utilisateurs"), [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utilisateur $utilisateur)
    {
        $roles = Role::all();
        return view('admin.users.form', [
            'utilisateur' => $utilisateur,
            'roles' => $roles,
        ]);
    }

    // public function login(UtilisateurStoreRequest $request)
    // {
    //     $credentials = $request->validated();

    //     if(Auth::attempt($credentials)) {
    //         return redirect()->intended(route(''));
    //     }
    //     return to_route('')->withErrors(
    //         [
    //             'email' => 'Email Invalide'
    //         ]
    //     )->onlyInput('email');
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UtilisateurUpdateRequest $request, Utilisateur $utilisateur)
    {
        $utilisateur->update($request->validated());

        return redirect()
            ->route('users.index')
            ->with('success', "Vos informations ont été modifiés");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();

        return redirect()
            ->route('users.index')
            ->with('success', "L'utilsateur a été supprimé");
    }
}
