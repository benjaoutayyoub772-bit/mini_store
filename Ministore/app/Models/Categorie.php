<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name', 'description'];

    public function produits()
    {
        return $this->hasMany(Produits::class, 'categories_id');
    }
}