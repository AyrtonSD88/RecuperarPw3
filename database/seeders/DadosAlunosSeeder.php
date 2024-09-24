<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DadosAlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('DadosAlunos')->insert([
            [
                'name' => 'João Silva',
                'enderoco' => 'Rua A, 123',
                'serie' => '8º Ano',
                'turma' => 'A',
            ],
            [
                'name' => 'Maria Oliveira',
                'enderoco' => 'Rua B, 456',
                'serie' => '9º Ano',
                'turma' => 'B',
            ],
            [
                'name' => 'Carlos Pereira',
                'enderoco' => 'Rua C, 789',
                'serie' => '7º Ano',
                'turma' => 'C',
            ],
        ]);
    }
}
