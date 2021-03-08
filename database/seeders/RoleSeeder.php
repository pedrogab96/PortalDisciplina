<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (RoleName::getConstants() as $name => $priorityLevel) {
            Role::query()
                ->updateOrCreate([
                    'name' => $name,
                ], [
                    'priority_level' => $priorityLevel,
                ]);
        }
    }
}
