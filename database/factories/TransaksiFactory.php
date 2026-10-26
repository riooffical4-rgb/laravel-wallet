<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'keterangan' => $this->faker->sentence(),
            'nominal' => $this->faker->randomFloat(2, 1000, 100000),
            'tipe' => $this->faker->randomElement(['pemasukan', 'pengeluaran']),
            'tanggal_transaksi' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
