<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'first_name'=>'امیر',
        'last_name'=>'نکویی',
        'email'=>'amir@gmail.com',
        'mobile'=>'09395439774',
        'password'=>bcrypt('123456'),
        'current_role'=>'super_admin',
            ]);
    }
}
