<?php

namespace Database\Factories;

use App\Models\Citas_detalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class Citas_detalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas_detalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcitas' => $this->faker->word
        ];
    }
}
