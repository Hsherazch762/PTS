<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'board_id'];

    public function boards()
    {
        return $this->belongsToMany(Board::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
