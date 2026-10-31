<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;

class customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create(['full_name' => 'Andrea Smith',
        'email' => 'asmith@gmail.com', 'phone' => '09123345678']);
        Customer::create(['full_name' => 'William Smith',
        'email' => 'wsmith@gmail.com', 'phone' => '09112234455']);
        Customer::create(['full_name' => 'Maria Williams',
        'email' => 'mwilliams@gmail.com', 'phone' => '09122334567']);
        Customer::create(['full_name' => 'Samantha Cruz',
        'email' => 'scruz@gmail.com', 'phone' => '09123345566']);
        Customer::create(['full_name' => 'John Reyes',
        'email' => 'jreyes@gmail.com', 'phone' => '09123445677']);
    }
}
