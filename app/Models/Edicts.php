<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicts extends Model
{
    use HasFactory;

    protected $table = "edicts";

    protected $dates = [
        'submission_start',
        'submission_finish',
        'rate_start',
        'rate_finish',
        'execution_start',
        'execution_finish'
    ];

    public function projects() {
        return $this->hasMany(Projects::class, 'edicts_id', 'id');
    }

    public function categories()
    {
        return $this->hasOne(Categories::class, 'id', 'categories_id');
    }

    public function titulations()
    {
        return $this->hasOne(MinTitulations::class, 'id', 'min_titulations_id');
    }
}
