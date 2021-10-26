<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User,Company};

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

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Company::factory(1)->create();

    }
}
