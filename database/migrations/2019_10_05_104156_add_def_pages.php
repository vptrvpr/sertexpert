<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::table('pages')->insert([
            [
                'name' => 'Услуги'
            ],
            [
                'name' => 'Сертификация по отраслям'
            ],
            [
                'name' => 'Нормативная база'
            ],
            [
                'name' => 'Новости'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::table('pages')->whereIn('name', [
            'Услуги',
            'Сертификация по отраслям',
            'Нормативная база',
            'Новости'
        ]);
    }
}
