<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Export>
 */
class ExportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'branch' => fake()->word,
            'phone' => fake()->phoneNumber,
            'received_currency' => fake()->currencyCode,
            'sent_currency' => fake()->currencyCode,
            'received_amount' => fake()->randomFloat(2, 100, 10000),
            'amount_sent' => fake()->randomFloat(2, 100, 10000),
            'status' => fake()->randomElement(['pending', 'delivered']), // Fix faker instance
            'tax' => fake()->randomFloat(2, 1, 10),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
