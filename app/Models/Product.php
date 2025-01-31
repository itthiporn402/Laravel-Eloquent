<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'stock'];


    public function productType()      // ความสัมพันธ Many-to-One กับ ProductType
    {
        return $this->hasMany(OrderDetail::class);
        }
}
