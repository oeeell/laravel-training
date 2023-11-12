<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $movies = [
            [
                'title'=> 'Doraemon',
                'photo'=> 'doraemon.jpg',
                'description'=>'description doraemon',
               
            ],
            [
                'title'=> 'Bluey',
                'photo'=> 'bluey.jpg',
                'description'=>'description bluey movie',
                
            ],
            [
                'title'=> 'Elemental',
                'photo'=> 'elemental.png',
                'description'=>'description elemental movie',
                
            ],
            [
                'title'=> 'Spiderman',
                'photo'=> 'spiderman.jpg',
                'description'=>'description spiderman movie',
                
            ],
        ];
        //
        DB::table('movies')->insert($movies);
    }
}
