<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;
    protected $table = 'medicines';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'brand',
        'dosage',
        'form',
        'price',
        'stock',
    ];
    public function sales()
    {
        return $this->hasMany(Sales::class, 'id', 'drug_id');
    }
}
