<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        // User::create([
        //     'name'=>'Eugênio Paccelli',
        //     'role'=> 1,
        //     'email'=> 'teste1@gmail.com',
        //     'password'=> '12345678'
        // ]);

        // User::create([
        //     'name'=>'Bruno Santana',
        //     'role'=> 1,
        //     'email'=> 'teste2@gmail.com',
        //     'password'=> '12345678'
        // ]);

        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0
        ]);
        
    }
}
