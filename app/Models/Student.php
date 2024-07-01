<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
        'first_name',
        'last_name',
        'phone',
        'gender',
        'created_at',
        'update_at',
    ];

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}
