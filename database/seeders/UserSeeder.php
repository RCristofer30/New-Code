<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@prueba.com';
        $user->password = bcrypt('administrador');
        $user->save();

        $user = new User;
        $user->name = 'Vendedor';
        $user->email = 'vendedor@prueba.com';
        $user->password = bcrypt('vendedor');
        $user->save();

        $user = new User;
        $user->name = 'Cristofer Ramos';
        $user->email = 'cristofer@prueba.com';
        $user->password = bcrypt('Ramos123');
        $user->save();

    }
}