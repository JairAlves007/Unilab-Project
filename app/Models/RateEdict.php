<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateEdict extends Model
{
    use HasFactory;

    protected $table = "rate_edicts";

    protected $fillable = [
        'rate',
        'avaliator',
        'edict_id'
    ];
}
