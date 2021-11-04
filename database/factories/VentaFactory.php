<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venta;

class VentaFactory extends Factory
{

    protected $model = Venta::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cantidad_Producto'=>$this->faker->numerify('####'),
            'Nombre_producto'=>$this->faker->sentence($nbWords =3, $variableNbWords = true),
            'Descripcion_Producto'=>$this->faker->sentence($nbWords =10, $variableNbWords = true),
            'precio_De_Compra'=>$this->faker->numerify('####'),
            'precio_De_Venta'=>$this->faker->numerify('####'),
            'Ganancia'=>$this->faker->numerify('####')
        ];
    }
}
