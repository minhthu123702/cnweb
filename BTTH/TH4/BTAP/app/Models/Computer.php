<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = ['computer_name', 'model', 'operating_system', 'processor', 'memory_limit', 'available'];
    public function issues(){
        return $this->hasMany(Issue::class, 'computer_id');
    }
}
