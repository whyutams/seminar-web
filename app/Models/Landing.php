<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $fillable = [
        'main_description',
        'schedule_description',
        'schedule_date',
        'hero_image',
        'updated_by'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
