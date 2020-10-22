<?php

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
        //---Descomentar para que funcione el seeder
        $this->call(UsuariosSeeder::class);
    }
}
