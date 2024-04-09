<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'date',
        'montant_ht',
        'tva',
    ];

    public function client()
{
    return $this->belongsTo(Client::class);
}
}


