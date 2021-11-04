<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventario;

class InventarioFactory extends Factory
{
    protected $model=Inventario::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'cantidad_Product'=>$this->faker->numerify('####'),
            'Nombre_product'=>$this->faker->sentence($nbWords =3, $variableNbWords = true),
            'Descripcion_Product'=>$this->faker->sentence($nbWords =10, $variableNbWords = true),
            'precio_De_Compr'=>$this->faker->numerify('####'),
            'precio_De_Vent'=>$this->faker->numerify('####')    
        ];
    }
}
