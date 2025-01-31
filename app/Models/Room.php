<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;  // เพิ่มบรรทัดนี้

    protected $fillable = ['room_type_id', 'room_number'];
}
