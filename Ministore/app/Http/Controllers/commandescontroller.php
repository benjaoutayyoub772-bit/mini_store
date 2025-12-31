<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class commandescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Commandes = Commande::all();
        return view('commandes.index', compact('Commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Commande::create([
            'client_id'  => $request->client_id,
            'produit_id' => $request->produit_id,
        ]);

        return redirect()->route('commandes.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commande = commandes::findOrFail($id);
        $commande->update($request->all());
        return redirect()->route('commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commande = commandes::findOrFail($id);
        $commande->delete();
        return redirect()->route('commandes.index');
    }
}
