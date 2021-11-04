<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ingreso;

class IngresoFactory extends Factory
{
    protected $model=Ingreso::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cantidad_Produc'=>$this->faker->numerify('####'),
            'Nombre_produc'=>$this->faker->sentence($nbWords =3, $variableNbWords = true),
            'Descripcion_Produc'=>$this->faker->sentence($nbWords =10, $variableNbWords = true),
            'precio_De_Comp'=>$this->faker->numerify('####'),
            'precio_De_Ven'=>$this->faker->numerify('####'),
            'Gananci'=>$this->faker->numerify('####')
        ];
    }
}
