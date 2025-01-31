<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;  // เพิ่มบรรทัดนี้

    protected $fillable = ['customer_id', 'room_id', 'check_in', 'check_out'];
}
