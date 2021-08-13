<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'chapters_id', 'title', 'video', 'users_id'
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapters_id', 'id');
    }
}
