<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsUser extends Model
{
    use HasFactory;

    protected $table = "projects_user";

    protected $fillable = [
        'edict_id',
        'project_id',
        'user_id',
    ];

    public $timestamps = false;
}
