<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlans extends Model
{
    use HasFactory;

    protected $table = "work_plans";

    protected $casts = [
        'bolsistas' => 'array'
    ];

    protected $fillable = [
        'title',
        'content',
        'abstract',
        'references',
        'bolsistas'
    ];

    public function project() {
        return $this->hasOne(Projects::class, 'id', 'project_id');
    }

}
