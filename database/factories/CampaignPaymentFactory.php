<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign_Payment>
 */
class CampaignPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => User::all()->random()->id,
            "campaign_type" => Campaign::all()->random()->id,
            'payment_method' => fake()->randomElement(['GCash', 'PayMaya', 'PayPal']),
            'subscription_period' => fake()->randomElement([1, 3, 6, 12]),
        ];
    }
}