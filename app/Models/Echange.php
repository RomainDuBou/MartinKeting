<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echange extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'heure', 'contenu', 'type'];

    public function prospect()
{
    return $this->belongsTo(Prospect::class, 'prospect_id');
}

}


