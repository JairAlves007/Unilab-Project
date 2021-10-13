<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projects";

    public function edict() {
        return $this->hasOne(Edicts::class, 'id', 'edicts_id');
    }
}
