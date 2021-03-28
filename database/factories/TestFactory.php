<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // 性別取得
        $gender = $this->faker->randomElement(['男','女']);

        return [
            'user_name' => $this->faker->name($gender),
            'gender' => $gender
        ];
    }
}
