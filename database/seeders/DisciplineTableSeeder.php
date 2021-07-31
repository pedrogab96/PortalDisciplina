<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Discipline;


class DisciplineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 0; $i < 4; $i++){
            Discipline::factory()->create();
       }

    }
}
