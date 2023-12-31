<?php

namespace Database\Seeders\Address;

use App\Models\Address\Address;
use App\Models\Address\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name'      => 'PR',
            'id'      => 1
        ]);
    }
}