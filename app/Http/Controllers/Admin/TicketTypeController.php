<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketTypeRequest;
use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickettypes = TicketType::all();
        return view('admin.tickettype.index', compact("tickettypes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tickettype.form', [
            'tickettype' => new TicketType(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketTypeRequest $request)
    {
        TicketType::create($request->validated());

        return redirect()
            ->route('tickettypes.index')
            ->with('success', "Le type de ticket a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketType $tickettype)
    {
        return view('admin.tickettype.form', [
            'tickettype' => $tickettype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketTypeRequest $request, TicketType $ticketType)
    {
        return redirect()
            ->route('tickettypes.index')
            ->with('success', "Le type de ticket a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketType $tickettype)
    {
        $tickettype->delete();

        return redirect()
            ->route('tickettypes.index')
            ->with('success', "Le type de ticket a été supprimé");
    }
}
