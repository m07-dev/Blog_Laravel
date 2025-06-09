<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formations;

class Etudiants extends Model
{
    public function formation(){
        return $this->belongsTo(Formations::class);
    }
}
