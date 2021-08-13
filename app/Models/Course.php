<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'categories_id', 'description', 'thumbnail'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'courses_id', 'id');
    }
}
