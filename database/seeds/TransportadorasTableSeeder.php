<?php

use Illuminate\Database\Seeder;

class TransportadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('transportadoras')->insert([
        'nome' => 'Transportadora Teste',
        'email' => 'transportadora@teste.com.br',
        'telefone' => '11-88888-5555'
      ]);
    }
}
