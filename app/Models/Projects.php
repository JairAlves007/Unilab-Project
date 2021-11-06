<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        'title',
        'archive',
        'content',
        'abstract',
        'references',
        'participant_id'
    ];

    public function edict()
    {
        return $this->hasOne(Edicts::class, 'id', 'edicts_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function ownerProject()
    {
        return $this->hasOne(Teachers::class, 'id', 'teachers_id');
    }

    public function workPlan()
    {
        return $this->hasOne(WorkPlans::class, 'project_id', 'id');
    }

    public function big_area()
    {
        return $this->hasOne(BigAreas::class, 'id', 'big_areas_id');
    }

    public function area()
    {
        return $this->hasOne(Areas::class, 'id', 'areas_id');
    }

    public function sub_area()
    {
        return $this->hasOne(SubAreas::class, 'id', 'sub_areas_id');
    }

    public function projectsAsParticipant() {
        return $this->belongsToMany(User::class, 'projects_user', 'project_id', 'user_id');
    }
}
