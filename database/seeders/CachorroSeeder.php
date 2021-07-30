<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CachorroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cachorro')->insert([
            'nome' => "Pedrito",
            'porte' => "Médio",
            'pelagem' => "Longa",
            'sexo' => "Masculino",
            'idade' => "6 anos e 4 meses",
            'cor' => "Branco",
            'id_produto' => "1",
            'id_dono' => "1",
        ]);

        DB::table('cachorro')->insert([
            'nome' => "Mel",
            'porte' => "Pequeno",
            'pelagem' => "Curta",
            'sexo' => "Feminino",
            'idade' => "2 anos e 2 meses",
            'cor' => "Cinza",
            'id_produto' => "2",
            'id_dono' => "2",
        ]);

        DB::table('cachorro')->insert([
            'nome' => "Neguinho",
            'porte' => "Pequeno",
            'pelagem' => "Longa",
            'sexo' => "Masculino",
            'idade' => "8 meses",
            'cor' => "Preto",
            'id_produto' => "3",
            'id_dono' => "3",
        ]);

        DB::table('cachorro')->insert([
            'nome' => "Malu",
            'porte' => "Grande",
            'pelagem' => "Média",
            'sexo' => "Feminino",
            'idade' => "12 anos",
            'cor' => "Caramelo",
            'id_produto' => "4",
            'id_dono' => "3",
        ]);

        DB::table('cachorro')->insert([
            'nome' => "Fred",
            'porte' => "Médio",
            'pelagem' => "Curta",
            'sexo' => "Masculino",
            'idade' => "1 ano e 2 meses",
            'cor' => "Preto e Branco",
            'id_produto' => "5",
            'id_dono' => "4",
        ]);
    }
}
