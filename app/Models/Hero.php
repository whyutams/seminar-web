<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{ 
    protected $fillable = ['image', 'uploaded_by'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
