<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'code_number', 'school_id'
    ];

    public function school(){
        return $this->hasOne(School::class,'id','school_id');
    }
}
