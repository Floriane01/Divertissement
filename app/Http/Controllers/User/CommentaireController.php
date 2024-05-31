<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentaireRequest;
use App\Models\Commentaire;
use App\Models\Evenement;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.commentaire.form', [
            'post' => new Commentaire()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentaireRequest $request)
    {
        Commentaire::create(($request->validated()));

        return redirect()
            ->route('posts.show')
            ->with('success', "Le commentaire a bien été ajputé");
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        return view('organisateur.evenement.show', [
            'commentaire' => $commentaire
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        return view('user.commentaire.form', [
            'commentaire' => $commentaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentaireRequest $request, Commentaire $commentaire)
    {
        $commentaire->update($request->validated());

        return redirect()
            ->route('evenements.show')
            ->with('success', "Le commentaire a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();

        return redirect()
            ->route('evenements.show')
            ->with('success', "Le commentaire a bien été supprimé");
    }
}
