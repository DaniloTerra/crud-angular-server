<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('clientes')->insert([
        'nome' => 'Cliente Teste',
        'email' => 'cliente@teste.com.br',
        'telefone' => '11-99999-5555'
      ]);
    }
}
