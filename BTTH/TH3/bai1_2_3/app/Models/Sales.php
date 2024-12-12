<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
    protected $fillable = [
        'drug_id',
        'quantity',
        'sale_date',
        'customer_phone',
    ];
    public function medicine()
    {
        return $this->belongsTo(Medicines::class, 'drug_id', 'id');
    }
}
