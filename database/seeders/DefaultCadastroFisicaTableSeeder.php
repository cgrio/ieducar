<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultCadastroFisicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(
            file_get_contents(__DIR__ . '/../sqls/inserts/cadastro.fisica.sql')
        );
    }
}
