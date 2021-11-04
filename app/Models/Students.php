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

    protected $casts = [
        'registrations' => 'array'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
