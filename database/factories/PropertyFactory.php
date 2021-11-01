<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_category_id' => rand(1,3),
            'tittle' => $this->faker->sentence(),
            'address' => $this->faker->sentence(),
            'price' => rand(50000,250000),
            'description' => $this->faker->text(200),
        ];
    }
}
