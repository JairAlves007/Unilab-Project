<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicts extends Model
{
    use HasFactory;

    protected $table = "edicts";

    public function categories() {
        return $this->hasOne(Categories::class, 'id', 'categories_id');
    }

    public function titulations(){
        return $this->hasOne(MinTitulations::class, 'id', 'min_titulation_id');
    }
}
