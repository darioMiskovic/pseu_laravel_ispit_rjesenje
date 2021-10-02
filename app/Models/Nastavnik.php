<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nastavnik extends Model
{
    protected $table = "nastavnici";

    protected $fillable = [
        "ime_prezime","datum_rodjenja","asistent"
    ];

    public function kolegiji(){
        return $this->hasMany(Kolegij::class, "nastavnik_id");
    }
}
