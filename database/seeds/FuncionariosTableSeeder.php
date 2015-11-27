<?php

use Illuminate\Database\Seeder;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('funcionarios')->insert([
        'nome' => 'Funcionário Teste',
        'email' => 'funcionario@teste.com.br',
        'telefone' => '11-77777-5555'
      ]);
    }
}
