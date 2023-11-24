<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "company_name" => $this->faker->name(),
            "company_about" => $this->faker->text(100),
            "company_no" => $this->faker->randomNumber(9),
            "company_size" => $this->faker->randomNumber(3),
            "company_time_acc" => $this->faker->randomNumber(1),
            "company_category" => $this->faker->text(10),
            "company_additional" => $this->faker->text(100),
            "company_place" => $this->faker->text(20),
        ];
    }
}
