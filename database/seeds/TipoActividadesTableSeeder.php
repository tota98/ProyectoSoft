<?php

use Illuminate\Database\Seeder;

class TipoActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Tipo_actividad::class,10)->create();
    }
}
