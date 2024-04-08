<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'date_naissance', 'besoin'];

    public function echanges()
    {
        return $this->hasMany(Echange::class);
    }
}
