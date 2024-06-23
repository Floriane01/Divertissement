<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EvenementRequest;
use App\Http\Requests\EvenementStoreRequest;
use App\Http\Requests\TicketTypeRequest;
use App\Models\Evenement;
use App\Models\Sponsor;
use App\Models\TicketType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $sponsors = Sponsor::all();
        return view('admin.evenements.form', [
            'evenement' => new Evenement(),
            'sponsors' => $sponsors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvenementRequest $request)
    {
        $data = $this->withImage(new Evenement(), $request);
        $organisateur = implode(', ', $request->validated('organisateur'));
        $sponsors = $request->validated('sponsors');
        unset($data['sponsors'], $data['organisateur']);
        $eventToBeSaved = $data;

        $evenement = Evenement::create(array_merge($eventToBeSaved, [
            'user_id' => Auth::user()->id,
            // 'user_id' => 1,
            'statut' => 'en attente',
            'organisateur' => $organisateur,
        ]));

        $sponsorsOfEvent = [];

        foreach ($sponsors as $sponsor) {
            if (!Sponsor::where('id', $sponsor)->exists()) {
                $sponsorCreated = Sponsor::create(['id' => $sponsor]);
                array_push($sponsorsOfEvent, $sponsorCreated->id);
            } else {
                array_push($sponsorsOfEvent, $sponsor);
            }
        }

        $evenement->sponsors()->sync($sponsorsOfEvent);

        return redirect()
            ->route('admin.evenements.index')
            ->with('success', "L'évènement a bien été ajouté");
    }

    private function withImage(Evenement $evenement, EvenementRequest $request): array
    {
        $data = $request->validated();

        if (array_key_exists('cover', $data)) {
            $eventCover = $data['cover'];
            $data['cover'] = $eventCover->storeAs('eventCover', $request->file('cover')->getClientOriginalName(), 'public');
            $eventCoverPath = 'public/' . $evenement->image;
            if (Storage::exists($eventCoverPath)) Storage::delete('public/' . $evenement->image);
        }
        return $data;
    }

    public function setTicketType(Evenement $evenement, TicketTypeRequest $request)
    {
        // dd($request->validated(), $evenement);

        $data = $request->validated();

        if (array_key_exists('image', $data)) {
            $ticketImage = $data['image'];
            $data['image'] = $ticketImage->storeAs('tickets', $request->file('image')->getClientOriginalName(), 'public');
            $ticketImagePath = 'public/' . $evenement->image;
            if (Storage::exists($ticketImagePath)) Storage::delete('public/' . $evenement->image);
        }
        TicketType::create($data);

        return redirect()->route('admin.evenements.index')->with('success', 'L\'option de ticket à été bien créée');
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
            ->route('admin.evenements.index')
            ->with('success', "L'évènement a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return redirect()
            ->route('admin.evenements.index')
            ->with('success', "L'évènement a bien été supprimé");
    }
}
