<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Booking;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        Product::factory(10)->create();
        Customer::factory(5)->create();
        Order::factory(10)->has(OrderDetail::factory(2))->create();
        RoomType::factory(3)->create();  // สมมติว่าเราจะมีห้องพัก 3 ประเภท
        Room::factory(10)->create();  // สมมติว่าเราจะมีห้องพักทั้งหมด 10 ห้อง
        Booking::factory(5)->create();  // สร้างการจอง 5 รายการ

    }
}

