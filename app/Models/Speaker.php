<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'type',
        'photo',
        'added_by'
    ];
 
    public function creator()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
