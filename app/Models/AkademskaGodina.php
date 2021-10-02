<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AkademskaGodina extends Model
{
    protected $table = "skolske_godine";

    protected $fillable = [
        "oznaka","godina_1","godina_2"
    ];

    public function nastavni_plan(){
        return $this->hasMany(NastavniPlan::class, "skolska_godina_id");
    }
}
