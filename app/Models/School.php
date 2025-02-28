<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use  HasFactory;
    protected $fillable = [
        'name', 'address'
    ];

    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class, 'id', 'school_id');
    }
}
