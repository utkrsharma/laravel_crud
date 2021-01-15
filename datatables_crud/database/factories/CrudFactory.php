<?php

namespace Database\Factories;

use App\Models\Crud;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CrudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Crud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
        ];
    }
}
