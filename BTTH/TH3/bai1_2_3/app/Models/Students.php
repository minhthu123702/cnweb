<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'parent_phone',
        'class_id',
      
    ];
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }
}
