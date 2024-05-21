<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EvenementRequest;
use App\Http\Requests\EvenementStoreRequest;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view('admin.evenements.index', compact("evenements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.evenements.form', [
            'evenement' => new Evenement()
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( EvenementRequest $request)
    {
        Evenement::create($request->validated());

        return redirect()
            ->route('evenements.index')
            ->with('success', "L'évènement a bien été ajoutée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        // $evenement = Evenement::where("id", $id)->get();

        return view('admin.evenements.show', compact("evenement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        return view('admin.evenements.form', [
            'evenement' => $evenement

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EvenementRequest $request, Evenement $evenement)
    {
        $evenement->update($request->validated());

        return redirect()
            ->route('evenements.index')
            ->with('success', "L'évènement a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return redirect()
            ->route('evenements.index')
            ->with('success', "L'évènement a bien été supprimé");
    }

    public function soumettreEvenement(EvenementRequest $request)
    {

        $evenement = Evenement::create($request->validated());

        // Maintenant je pense qu'à ce niveau il me faut un code pour gérer le paiement de la comission hein maintenant reste à savoir comment je vais gérer ça


        $$notification = Notification::create([
            'message' => 'Nouvel événement soumis : ' . $evenement->titre
        ]);


        return redirect()
            ->route()
            ->with('success', 'Événement soumis avec succès !');
    }

}
