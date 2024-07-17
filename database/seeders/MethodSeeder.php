<?php

namespace Database\Seeders;

use App\Models\Method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Method::create([
            'title' => 'BCA Virtual Account',
            'vir_acc' => '081905634863'
        ]);
        Method::create([
            'title' => 'Mandiri Virtual Account',
            'vir_acc' => '081905634863'
        ]);
        Method::create([
            'title' => 'OVO',
            'vir_acc' => '081905634863'
        ]);
        Method::create([
            'title' => 'Gopay',
            'vir_acc' => '081905634863'
        ]);
    }
}