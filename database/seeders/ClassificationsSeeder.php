<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Seeder;

use App\Enums\ClassificationID;

class ClassificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classification::create([
            'id' => ClassificationID::APRESENTACAO_TRABALHOS,
            'name' => 'Apresentação de Trabalhos',
        ]);

        Classification::create([
            'id' => ClassificationID::PRODUCAO_TEXTUAL,
            'name' => 'Produção Textual',
        ]);

        Classification::create([
            'id' => ClassificationID::LISTA_EXERCICIOS,
            'name' => 'Lista de Exercícios',
        ]);

        Classification::create([
            'id' => ClassificationID::DISCUSSAO_SOCIAL,
            'name' => 'Discussão Social',
        ]);

        Classification::create([
            'id' => ClassificationID::DISCUSSAO_TECNICA,
            'name' => 'Discussão Técnica',
        ]);

        Classification::create([
            'id' => ClassificationID::ABORDAGEM_TEORICA,
            'name' => 'Abordagem Teórica',
        ]);

        Classification::create([
            'id' => ClassificationID::ABORDAGEM_PRATICA,
            'name' => 'Abordagem Prática',
        ]);

        Classification::create([
            'id' => ClassificationID::AVALIACAO_PROVAS_ESCRITAS,
            'name' => 'Avaliação por Provas Escritas',
        ]);

        Classification::create([
            'id' => ClassificationID::AVALIACAO_ATIVIDADES,
            'name' => 'Avaliação por Atividades',
        ]);

    }
}
