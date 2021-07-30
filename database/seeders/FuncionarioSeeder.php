<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionario')->insert([
            'nome' => "Claudia Silva Souza",
            'cpf' => "346.555.123-43",
            'salario' => "R$1700,00",
            'telefone' => "+55(49) 98883-4334",
            'email' => "claudia_ss@gmail.com",
        ]);

        DB::table('funcionario')->insert([
            'nome' => "Mariana Meirelles",
            'cpf' => "434.221.564-24",
            'salario' => "R$1750,00",
            'telefone' => "+55(49) 99454-7579",
            'email' => "mariana_meirelles@gmail.com",
        ]);

        DB::table('funcionario')->insert([
            'nome' => "Yuri Alberto",
            'cpf' => "333.244.545-56",
            'salario' => "R$1600,00",
            'telefone' => "+55(49) 98889-9978",
            'email' => "yuri_beto@gmail.com",
        ]);

    }
}
