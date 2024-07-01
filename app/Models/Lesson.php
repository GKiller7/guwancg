<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'branch_id',
        'teacher_id',
        'created_id',
        'updated_id',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    // many to one
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function registrations()
    {
        return $this->belongsTo(Registration::class);
    }

    public $timestamps = false;
}
