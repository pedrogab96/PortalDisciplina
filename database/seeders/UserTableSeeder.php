<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
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
        /*
         * Students
         */
        $roleStudent = Role::query()
            ->firstWhere('name', RoleName::STUDENT);

        User::create([
            'name' => 'Victor',
            'email' => 'victor_brandao@outlook.com',
            'password' => '$2y$10$toyM29iTlElj.ShFuHu0KumYyhKXtSGXVhBHy.YzS9eSEg89sKQMW',
            'role_id' => $roleStudent->id,
        ]);

        User::create([
            'name' => 'Pedro Gabriel',
            'email' => 'pedrogab96@gmail.com',
            'password' => '$2y$10$NHww673REnFjun6oaaChXub6MkPN.7WR//MNoUzZjh5ruqQTm7hIC',
            'role_id' => $roleStudent->id,
        ]);

        User::create([
            'name' => 'Arthur Sérvulo',
            'email' => 'arthurservulo7@gmail.com',
            'password' => '$2y$10$rBccdnryA5R5GbYzzen82uR2Sz7Iu7BB6Vi18ocIypjyP2wPn9PY2',
            'role_id' => $roleStudent->id,
        ]);

        User::create([
            'name' => 'Álvaro',
            'email' => 'alvarofepipa@gmail.com',
            'password' => bcrypt('mudar@123'),
            'role_id' => $roleStudent->id,
        ]);

        /*
         * Professors
         */
        $roleProfessor = Role::query()
            ->firstWhere('name', RoleName::PROFESSOR);
        User::create([
            'name' => 'Eugenio Paccelli',
            'email' => 'eugenio@imd.ufrn.br',
            'password' => '$2y$10$LwYZ050GVQXu.gksBsEXyubkImKd6xLyhaiZxl0PeeuOcaOeq/7/K',
            'role_id' => $roleProfessor->id,
        ]);
    }
}
