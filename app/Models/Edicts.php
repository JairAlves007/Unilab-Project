<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Edicts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "edicts";

    protected $fillable = [
        'edict_title',
        'archive',
        'description',
        'min_titulations_id',
        'categories_id',
        'submission_start',
        'submission_finish',
        'rate_start',
        'rate_finish',
        'execution_start',
        'execution_finish'
    ];

    protected $dates = [
        'submission_start',
        'submission_finish',
        'rate_start',
        'rate_finish',
        'execution_start',
        'execution_finish',
        'deleted_at'
    ];

    public function ownerEdict() {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

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
