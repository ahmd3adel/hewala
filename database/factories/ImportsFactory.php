<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imports>
 */
class ImportsFactory extends Factory
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
            'tax' => fake()->randomFloat(2, 1, 10),
            'state' => faker()->randomElement(['pending', 'delivered']),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
