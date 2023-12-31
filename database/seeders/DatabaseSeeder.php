<?php

namespace Database\Seeders;

use Database\Seeders\Address\AdressControllerSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdressControllerSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
