<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitucionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('instituciones')->insert([

            'codigo' => 'GOBER',
            'nombre' => 'Gobernación Departamental de Guatemala',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
