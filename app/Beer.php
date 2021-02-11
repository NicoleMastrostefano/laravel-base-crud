<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
      'nome',
      'marca',
      'prezzo',
      'alc_vol',
      'descrizione',
    ];
}
