<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Doce;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categorias = Categoria::factory()->count(10)->create();
        $doces = Doce::factory()->count(50)->create();


        foreach ($doces as $doce) {
            $doce->categoria_id = $categorias->random()->id;
            $doce->save();
        }
    }
}
