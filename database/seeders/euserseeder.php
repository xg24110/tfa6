<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\euser;

class euserseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        euser::create(['username' => 'vsantos',
        'full_name' => 'Vivian Santos']);
        euser::create(['username' => 'ejohnson',
        'full_name' => 'Ethan Johnson']);
        euser::create(['username' => 'egarcia',
        'full_name' => 'Elena Garcia']);
        euser::create(['username' => 'asmith',
        'full_name' => 'Antoinette Smith']);
        euser::create(['username' => 'llee',
        'full_name' => 'Liam Lee']);

    }
}
