<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create(['full_name' => 'Chiriemie Rimando', 'email' => 'cgrimando@gmail.com', 'phone' => '09123456789']);
        Customer::create(['full_name' => 'Ysabelle Castor', 'email' => 'ysacastor@gmail.com', 'phone' => '09234567890']);
        Customer::create(['full_name' => 'JM Abringe', 'email' => 'jmabringe@gmail.com', 'phone' => '09345678901']);
        Customer::create(['full_name' => 'Angela Gatbonton ', 'email' => 'agatbonton05@gmail.com', 'phone' => '09456789012']);
        Customer::create(['full_name' => 'Hardwinn Magdaraog', 'email' => 'hmagdaraog01@gmail.com', 'phone' => '09567890123']);
    }
}
