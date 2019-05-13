<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LoadInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table( 'categories' )->insert( [
                                               [
                                                   'name'      => 'Пищевая продукция',
                                                   'img_front' => 'sertif-po-otrl_1_13.png',
                                                   'img_back'  => 'sertif-vis_1_13.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Бытовая техника',
                                                   'img_front' => 'sertif-po-otrl_1_15.png',
                                                   'img_back'  => 'sertif-vis_1_15_15.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Автомобильная техника и запчасти',
                                                   'img_front' => 'sertif-po-otrl_1_17.png',
                                                   'img_back'  => 'sertif-vis_1_17.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Упаковка',
                                                   'img_front' => 'sertif-po-otrl_1_19.png',
                                                   'img_back'  => 'sertif-vis_1_19.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Алкоголь',
                                                   'img_front' => 'sertif-po-otrl_1_21.png',
                                                   'img_back'  => 'sertif-vis_1_21.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Товары для животных',
                                                   'img_front' => 'sertif-po-otrl_1_35.png',
                                                   'img_back'  => 'sertif-vis_1_35.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Строительные материалы',
                                                   'img_front' => 'sertif-po-otrl_1_37.png',
                                                   'img_back'  => 'sertif-vis_1_37.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'sertif-vis_1_37.png',
                                                   'img_front' => 'sertif-po-otrl_1_39.png',
                                                   'img_back'  => 'sertif-vis_1_39.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Обувь',
                                                   'img_front' => 'sertif-po-otrl_1_41.png',
                                                   'img_back'  => 'sertif-vis_1_41.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Бытовая химия',
                                                   'img_front' => 'sertif-po-otrl_1_43.png',
                                                   'img_back'  => 'sertif-vis_1_43.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Мебель',
                                                   'img_front' => 'sertif-po-otrl_1_57.png',
                                                   'img_back'  => 'sertif-vis_1_57.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Игрушки',
                                                   'img_front' => 'sertif-po-otrl_1_59.png',
                                                   'img_back'  => 'sertif-vis_1_59.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Промышленное оборудование',
                                                   'img_front' => 'sertif-po-otrl_1_61.png',
                                                   'img_back'  => 'sertif-vis_1_61.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Легкая промышленность',
                                                   'img_front' => 'sertif-po-otrl_1_63.png',
                                                   'img_back'  => 'sertif-vis_1_63.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'СИЗ',
                                                   'img_front' => 'sertif-po-otrl_1_65.png',
                                                   'img_back'  => 'sertif-vis_1_65.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'БАДы',
                                                   'img_front' => 'sertif-po-otrl_1_79.png',
                                                   'img_back'  => 'sertif-vis_1_79.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Световое оборудование',
                                                   'img_front' => 'sertif-po-otrl_1_81.png',
                                                   'img_back'  => 'sertif-vis_1_81.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Товары для детей',
                                                   'img_front' => 'sertif-po-otrl_1_83.png',
                                                   'img_back'  => 'sertif-vis_1_83.png',
                                                   'pages_id'  => 2,
                                               ],
                                               [
                                                   'name'      => 'Смазочные материалы и масла',
                                                   'img_front' => 'sertif-po-otrl_1_85.png',
                                                   'img_back'  => 'sertif-po-otrl_1_85.png',
                                                   'pages_id'  => 2,
                                               ],
                                           ] );
    }
}
