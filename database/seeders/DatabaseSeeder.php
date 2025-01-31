<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        Product::factory(10)->create();
        Customer::factory(5)->create();
        Order::factory(10)->has(OrderDetail::factory(2))->create();
    }
}

