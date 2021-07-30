<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dono')->insert([
            'nome' => "Maurício de Souza",
            'cpf' => "876.908.888-56",
            'telefone' => "+55(49) 98767-5678",
            'email' => "mauricio@gmail.com",
            'endereco' => "Avenida Sérgio Buarque, 345",
        ]);

        DB::table('dono')->insert([
            'nome' => "Renata Silveira",
            'cpf' => "987.009.345-44",
            'telefone' => "+55(49) 98897-0004",
            'email' => "renata@gmail.com",
            'endereco' => "Rua Lagos Claros, 786",
        ]);

        DB::table('dono')->insert([
            'nome' => "Tiago Nunes",
            'cpf' => "094.777.456-12",
            'telefone' => "+55(49) 99965-6754",
            'email' => "tiago@gmail.com",
            'endereco' => "Rua João de Barro, 115",
        ]);

        DB::table('dono')->insert([
            'nome' => "Letícia de Oliveira",
            'cpf' => "540.300.089-04",
            'telefone' => "+55(49) 99114-7432",
            'email' => "leticia@gmail.com",
            'endereco' => "Rua Antonio dos Santos, 460",
        ]);
    }
}
