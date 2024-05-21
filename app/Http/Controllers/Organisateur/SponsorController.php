<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorRequest;
use Illuminate\Http\Request;
use App\Models\Sponsor;



class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all() ;
        return view('organisateur.sponsor.index', compact("sponsors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisateur.sponsor.form', [
            'sponsor' => new Sponsor()
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( SponsorRequest $request)
    {
        Sponsor::create($request->validated());

        return redirect()
            ->route('sponsors.index')
            ->with('success', "Le sponsor a bien été ajoutée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor)
    {
        // $evenement = Evenement::where("id", $id)->get();

        return view('organisateur.sponsor.form', compact("sponsor"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        return view('organisateur.sponsor.form', [
            'sponsor' => $sponsor

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SponsorRequest $request, Sponsor $sponsor)
    {
        $sponsor->update($request->validated());

        return redirect()
            ->route('sponsors.index')
            ->with('success', "Le sponsor a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();

        return redirect()
            ->route('sponsors.index')
            ->with('success', "Le sponsor a bien été supprimé");
    }
}
