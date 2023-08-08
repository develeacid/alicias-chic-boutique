<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Crear usuarios de prueba
        User::create([
            'name' => 'paquito',
            'email' => 'paquito@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'juanito',
            'email' => 'juanito@example.com',
            'password' => bcrypt('password'),
        ]);User::create([
            'name' => 'luisito',
            'email' => 'luisito@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'maria',
            'email' => 'maria@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'esmeralda',
            'email' => 'esmeralda@example.com',
            'password' => bcrypt('password'),
        ]);User::create([
            'name' => 'dani',
            'email' => 'dani@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'julia',
            'email' => 'julia@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
