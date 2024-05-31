<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('organisateur.evenement.index', compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisateur.evenement.form', [
            'event' => new Event()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        Event::create($request->valdated());

        return redirect()
            ->route('events.index')
            ->with('success', "L'event a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('organisateur.evenement.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('organisateur.evenement.form', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->validated());

        return redirect()
            ->route('events.index')
            ->with('success', "L'event a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()
            ->route('evenements.index')
            ->with('success', "L'event a bien été supprimé");
    }
}
