<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeEvenementRequest;
use App\Models\TypeEvenement;
use Illuminate\Http\Request;

class TypeEvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = TypeEvenement::all();
        return view('admin.categories.index', compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.form', [
            'categorie' => new TypeEvenement(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeEvenementRequest $request)
    {
        TypeEvenement::create($request->validated());

        return redirect()
            ->route('categories.index')
            ->with('success', "Le type d'évènement a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeEvenement $categorie)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeEvenement $categorie)
    {
        return view('admin.categories.form', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeEvenementRequest $request, TypeEvenement $categorie)
    {
        return redirect()
            ->route('categories.index')
            ->with('success', "Le type d'évènement a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeEvenement $categorie)
    {
        $categorie->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', "Le type d'évènement a été supprimé");
    }
}
