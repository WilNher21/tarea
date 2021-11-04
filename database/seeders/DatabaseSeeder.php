<?php

namespace Database\Seeders;
use App\Models\Venta;
use App\Models\Ingresos;
use App\Models\Inventario;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VentaSeeder::class,
        ]);

        $this->call([
            IngresoSeeder::class,
        ]);
                
        $this->call([
            InventarioSeeder::class
        ]);
    }
}
