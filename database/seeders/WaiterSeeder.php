<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vamos a poblar la tabla camareros.
        $waiters = [
            [
                'name' => 'Salo',
                'role' => User::ROLE_ADMIN,
                'active' => 1,
            ],
            [
                'name' => 'Aguilita',
                'role' => User::ROLE_WAITER,
                'active' => 1,
            ],
            [
                'name' => 'Gloria',
                'role' => User::ROLE_WAITER,
                'active' => 1,
            ],
            [
                'name' => 'Montse',
                'role' => User::ROLE_WAITER,
                'active' => 1,
            ],
            [
                'name' => 'Desirée',
                'role' => User::ROLE_WAITER,
                'active' => 1,
            ],
            [
                'name' => 'Kaoba',
                'role' => User::ROLE_WAITER,
                'active' => 1,
            ],
        ];

        // Creamos los usuarios de una sola vez
        foreach ($waiters as $waiter) {
            User::create($waiter);
        }
    }
}
