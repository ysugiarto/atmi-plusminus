<?php

namespace Modules\UserProfile\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\UserProfile\Models\Person::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

