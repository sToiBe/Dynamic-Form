<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Genera 10 registros de ejemplo
        for ($i = 1; $i <= 10; $i++) {
            DB::table('templates')->insert([
                'name' => 'Template ' . $i,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
