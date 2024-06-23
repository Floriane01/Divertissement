<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evenement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard-admin');
    }

    public function validerEvenement($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->valide = true;
        $evenement->save();


        return redirect()
            ->route('admin.evenements.index')
            ->with('success', 'Événement validé avec succès !');
    }

}
