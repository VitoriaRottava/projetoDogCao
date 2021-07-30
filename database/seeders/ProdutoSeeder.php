<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            'nome' => "Shampoo para pelos longos e claros",
            'marca' => "Petshows",
            'qtd_estoque' => "16 unidades",
            'custo' => "R$35,00",
        ]);

        DB::table('produto')->insert([
            'nome' => "Shampoo para pelos curtos",
            'marca' => "AUmiguinho",
            'qtd_estoque' => "25 unidades",
            'custo' => "R$30,00",
        ]);

        DB::table('produto')->insert([
            'nome' => "Shampoo para filhotes",
            'marca' => "Petshows",
            'qtd_estoque' => "9 unidades",
            'custo' => "R$60,00",
        ]);

        DB::table('produto')->insert([
            'nome' => "Shampoo para os velhinhos",
            'marca' => "Lambeijo",
            'qtd_estoque' => "5 unidades",
            'custo' => "R$40,00",
        ]);

        DB::table('produto')->insert([
            'nome' => "Shampoo anti-pulgas",
            'marca' => "AUmiguinho",
            'qtd_estoque' => "22 unidades",
            'custo' => "R$25,00",
        ]);
    }
}
