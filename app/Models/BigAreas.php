<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigAreas extends Model
{
    use HasFactory;

    protected $table = "big_areas";

    public function projects() {
        $this->hasMany(Projects::class, 'id', 'big_areas_id');
    }
}
