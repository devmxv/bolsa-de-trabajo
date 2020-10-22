<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = User::where('email', 'admin@bt.com')->first();

        //---Si el usuario de arriba no se encontró
        if (!$usuario) {
            User::create([
                'name' => 'LM',
                'email' => 'admin@bt.com',
                'rol' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
