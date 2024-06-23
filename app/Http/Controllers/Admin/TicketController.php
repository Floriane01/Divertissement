<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.tickets.index', compact("tickets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tickets.form', [
            'ticket' => new Ticket()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketRequest $request)
    {
        Ticket::create($request->validated());

        return redirect()
            ->route('admin.tickets.index')
            ->with('success', "Le ticket a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('admin.tickets.form', compact("ticket"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('admin.tickets.form', [
            'ticket' => $ticket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $ticket->update($request->validated());

        return redirect()
            ->route('admin.tickets.index')
            ->with('success', "Le ticket a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()
            ->route('admin.tickets.index')
            ->with('success', "Le ticket a bien été supprimé");
    }

    // public function generateTicket()
    // {
    //     // Générer le QR code
    //     $qrCode = QrCode::format('png')->size(200)->generate('https://example.com');

    //     // Passer les données à la vue
    //     $data = [
    //         'title' => 'PDF avec QR Code',
    //         'date' => date('m/d/Y'),
    //         'qrCode' => base64_encode($qrCode)
    //     ];

    //     // Charger la vue et passer les données
    //     $pdf = PDF::loadView('pdf_view', $data);

    //     // Télécharger le PDF
    //     return $pdf->download('document.pdf');
    // }

}
