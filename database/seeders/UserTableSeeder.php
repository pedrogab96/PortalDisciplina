<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Eugênio Paccelli',
            'role'=> 1
        ]);

        User::create([
            'name'=>'Bruno Santana',
            'role'=> 1
        ]);

    }
}
