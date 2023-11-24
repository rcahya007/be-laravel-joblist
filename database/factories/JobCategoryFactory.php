<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "job_category" => $this->faker->text(10),
        ];
    }
}
