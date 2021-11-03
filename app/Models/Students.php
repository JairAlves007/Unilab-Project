<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration',
        'users_id'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
