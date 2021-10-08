<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinTitulations extends Model
{
    use HasFactory;

    protected $table = 'min_titulations';

    protected $fillable = [
        'titulation'
    ];

    public function edicts()
    {
        return $this->hasMany(Edicts::class, 'min_titulations_id', 'id');
    }
}
