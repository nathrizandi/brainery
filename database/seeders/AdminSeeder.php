<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            "username" => "Ener",
            "email"=> "enerindo@gmail.com"
        ]);
        Admin::factory()->create([
            "username" => "Sella",
            "email"=> "sellaindo@gmail.com"
        ]);
        Admin::factory()->create([
            "username" => "Joel",
            "email"=> "joelindo@gmail.com"
        ]);
        Admin::factory()->create([
            "username" => "Metiu",
            "email"=> "metiuindo@gmail.com"
        ]);
        Admin::factory()->create([
            "username" => "Abr",
            "email"=> "abrindo@gmail.com"
        ]);
    }
}
