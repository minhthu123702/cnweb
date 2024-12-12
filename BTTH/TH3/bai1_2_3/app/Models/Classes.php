<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';

    protected $primaryKey = 'id';
    protected $fillable = [
       'grade_level',
       'room_number',
    ];
    public function student()
    {
        return $this->hasMany(Students::class, 'id', 'class_id');
    }
}
