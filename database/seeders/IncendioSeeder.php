<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class IncendioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function cidade($chave)
    {
        $cidade = array(0 => "ÁGUAS CLARAS", 1 => "BRAZLÂNDIA",         2 => "CANDANGOLÂNDIA",         3 => "CEILÂNDIA",         4 => "CRUZEIRO",         5 => "FERCAL",         6 => "GAMA",         7 => "GUARÁ",         8 => "ITAPOÃ",         9 => "JARDIM BOTÂNICO",         10 => "LAGO NORTE",         11 => "LAGO SUL",         12 => "NÚCLEO BANDEIRANTE",         13 => "PARANOÁ",         14 => "PARK WAY",         15 => "PLANALTINA",         16 => "PLANO PILOTO",         17 => "RECANTO DAS EMAS",         18 => "RIACHO FUNDO",         19 => "RIACHO FUNDO II",         20 => "SAMAMBAIA",         21 => "SANTA MARIA",         22 => "SÃO SEBASTIÃO",         23 => "SCIA",         24 => "SIA",         25 => "SOBRADINHO",         26 => "SOBRADINHO II",         27 => "SUDOESTE/OCTOGONAL",         28 => "TAGUATINGA",         29 => "VARJÃO",         30 => "VICENTE PIRES");
        return $cidade[$chave];
    }
    public function run()
    {
        DB::table('incendio')->insert([
            'local' => $this->cidade(rand(0, 30)),
            'area_devastada' => rand(0, 100) . 'm²',
            'duracao' =>  rand(0, 100) . 'horas',
        ]);
    }
}
