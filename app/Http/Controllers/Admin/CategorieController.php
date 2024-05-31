<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.form', [
            'categorie' => new Categorie(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request)
    {
        Categorie::create($request->validated());

        return redirect()
            ->route('categorie.index')
            ->with('success', "Le type d'évènement a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        // dd($categorie);
        return view('admin.categories.form', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieRequest $request, Categorie $categorie)
    {
        $categorie->update($request->validated());
        return redirect()
            ->route('categorie.index')
            ->with('success', "Le type d'évènement a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()
            ->route('categorie.index')
            ->with('success', "Le type d'évènement a été supprimé");
    }
}
