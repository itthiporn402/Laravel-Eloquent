<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // กำหนดให้ name สามารถเพิ่มขอมูลได้ผาน mass assignment
    public function products()  // ความสัมพันธ One-to-Many กับ Product
    {
        return $this->hasMany(Product::class, 'product_type');
    }
}
