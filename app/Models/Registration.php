<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'student_id',
        'price',
        'created_at',
        'updated_at',
    ];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
