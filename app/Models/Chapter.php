<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title', 'courses_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id', 'id');
    }

    public function video()
    {
        return $this->hasMany(Video::class, 'chapters_id', 'id');
    }
}
