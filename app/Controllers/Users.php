<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Maria Lopez',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Kevin Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Sarah Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Daniel Santos',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}