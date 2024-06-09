<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'date_publication', 'nombre_page', 'auteur','isbn','editeur','image','disponibilite','categorie_id', 'rayon_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

}
