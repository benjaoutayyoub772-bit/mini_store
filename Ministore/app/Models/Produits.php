<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'categories_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }
}