<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['username' => 'admin_chi', 'full_name' => 'Chiriemie Rimando']);
        User::create(['username' => 'cashier_ace', 'full_name' => 'Ace Santos']);
        User::create(['username' => 'staff_emina', 'full_name' => 'Emina Pascual']);
        User::create(['username' => 'staff_alezz', 'full_name' => 'Alezzandra Gregorio']);
        User::create(['username' => 'staff_zild', 'full_name' => 'Zildjian Zipagan']);
    }
}
