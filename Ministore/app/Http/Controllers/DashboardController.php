<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Categorie;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'productsCount' => Produits::count(),
            'categoriesCount' => Categorie::count(),
            'clientsCount' => Client::count(),
            'latestProducts' => Produits::latest()->take(5)->get(),
        ]);
    }
}
