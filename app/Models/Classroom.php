<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['location_id'];

    protected function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public $timestamps = false;
}
