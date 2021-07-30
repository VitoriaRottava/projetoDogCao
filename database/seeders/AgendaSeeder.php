<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agenda')->insert([
            'titulo' => "Banho normal com tose higiênica",
            'dia' => "21/08/05",
            'hora' => "14:15:00",
            'id_produto' => "1",
            'id_dono' => "1",
            'id_cachorro' => "1",
            'id_funcionario' => "1",
            'preco' => "R$75,00",
            'info' => "Secar bem porque o cachorro é alérgico à umidade",
        ]);

        DB::table('agenda')->insert([
            'titulo' => "Banho master sem tosa",
            'dia' => "21/08/06",
            'hora' => "17:00:00",
            'id_produto' => "2",
            'id_dono' => "2",
            'id_cachorro' => "2",
            'id_funcionario' => "2",
            'preco' => "R$70,00",
            'info' => "Cadela tem medo de secador, deixar secar ao ar livre",
        ]);

        DB::table('agenda')->insert([
            'titulo' => "Banho ultra e tosa ultra",
            'dia' => "21/08/09",
            'hora' => "09:30:00",
            'id_produto' => "3",
            'id_dono' => "3",
            'id_cachorro' => "3",
            'id_funcionario' => "3",
            'preco' => "R$100,00",
            'info' => "Se ele ficar nervoso, dar um petisco",
        ]);

        DB::table('agenda')->insert([
            'titulo' => "Banho simples com tosa higiênica",
            'dia' => "21/08/09",
            'hora' => "10:30:00",
            'id_produto' => "4",
            'id_dono' => "3",
            'id_cachorro' => "4",
            'id_funcionario' => "1",
            'preco' => "R$50,00",
            'info' => "Dono disse que ela é muito agitada",
        ]);

        DB::table('agenda')->insert([
            'titulo' => "Banho com foco anti-pulga",
            'dia' => "21/08/10",
            'hora' => "09:30:00",
            'id_produto' => "5",
            'id_dono' => "4",
            'id_cachorro' => "5",
            'id_funcionario' => "2",
            'preco' => "R$45,00",
            'info' => "Está muito estressado por conta da coceira, lavar com focinheira",
        ]);
    }
}
