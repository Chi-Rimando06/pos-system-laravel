<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Chiriemie Rimando', 'email' => 'cgrimando@gmail.com'],
            ['id' => 2, 'name' => 'Ysabelle Castor', 'email' => 'ysacastor@gmail.com'],
            ['id' => 3, 'name' => 'JM Abringe', 'email' => 'jmabringe@gmail.com'],
            ['id' => 4, 'name' => 'Angela Gatbonton', 'email' => 'agatbonton05@gmail.com'],
            ['id' => 5, 'name' => 'Hardwinn Magdaraog', 'email' => 'hmagdaraog01@gmail.com'],
        ];
        return view('customers.index', compact('customers'));
    }
}
