<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categorie;

class produitscontroller extends Controller
{

public function index()
{
    $Produits = Produits::all();
    return view('produits.index', compact('Produits'));
}
    

    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories_id' => 'required|exists:categories,id',
        ]);

        Produits::create($request->all());
        return redirect()->route('produits.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        $produits = Produits::findOrFail($id);
        return view('produits.edit');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories_id' => 'required|exists:categories,id',
        ]);

        $produit = Produits::findOrFail($id);
        $produit->update($request->all());
        return redirect()->route('produits.index');
    }

    public function destroy(string $id)
    {
        $produit = Produits::findOrFail($id);
        $produit->delete();
        return redirect()->route('produits.index');
    }
}