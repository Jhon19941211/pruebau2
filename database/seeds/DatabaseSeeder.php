<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'nameuser' => 'Administrador',
            'city' => 'Bogotá',
            'role' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
        ]);
       
    }
}
