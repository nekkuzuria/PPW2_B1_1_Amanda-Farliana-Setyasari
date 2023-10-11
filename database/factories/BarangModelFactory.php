<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangModel>
 */
class BarangModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(10000, 300000),
            'stok' => $this->faker->numberBetween(0, 200),
            'id_supplier' => $this->faker->numerify("SU####")
        ];
    }
}
