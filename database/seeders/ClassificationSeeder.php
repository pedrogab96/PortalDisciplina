<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classification::create([
            'name' => "Apresentação de Trabalhos"
        ]);
        Classification::create([
            'name' => "Produção Textual"
        ]);
        Classification::create([
            'name' => "Lista de Exercícios"
        ]);
        Classification::create([
            'name' => "Discussão Social"
        ]);
        Classification::create([
            'name' => "Discussão Técnica"
        ]);
        Classification::create([
            'name' => "Abordagem Téorica"
        ]);
        Classification::create([
            'name' => "Abordagem Prática"
        ]);
        Classification::create([
            'name' => "Avaliação por Prova Escrita"
        ]);
        Classification::create([
            'name' => "Avaliação por Atividades"
        ]);
    }
}
