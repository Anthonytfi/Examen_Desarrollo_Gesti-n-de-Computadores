<?php

namespace Database\Seeders;

use App\Models\Computador;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ComputadorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Computador::create([
                'codigo_tienda' => $faker->word,
                'almacenamiento' => $faker->randomElement(['256GB', '512GB', '1TB']),
                'ram' => $faker->randomElement(['8GB', '16GB', '32GB']),
                'tarjeta_grafica' => $faker->randomElement(['NVIDIA GTX 1650', 'AMD Radeon RX 580', 'Intel UHD Graphics']),
                'precio' => $faker->randomFloat(2, 500, 3000),
                'descripcion' => $faker->sentence,
                'imagen' => $faker->imageUrl(),
                'procesador' => $faker->randomElement(['Intel i5', 'Intel i7', 'AMD Ryzen 5', 'AMD Ryzen 7']),
            ]);
        }
    }
}
