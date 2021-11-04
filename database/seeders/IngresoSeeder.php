<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingreso;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        Ingreso::factory(500)->create();
    }
}
