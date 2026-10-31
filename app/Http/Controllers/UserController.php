<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin_chi', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'cashier_ace', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'staff_emina', 'role' => 'Inventory Staff'],
            ['id' => 4, 'username' => 'staff_alezz', 'role' => 'Cashier'],
            ['id' => 5, 'username' => 'staff_zild', 'role' => 'Support'],
        ];
        return view('users.index', compact('users'));
    }
}
