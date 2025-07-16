<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'department',
        'institution',
        'country',
        'phone',
        'email',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}