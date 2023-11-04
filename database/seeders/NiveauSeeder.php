<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niveau')->delete();
        DB::table('niveau')->insert([
            [
               'niveau'=>'Licence' 
            ],
            [
                'niveau'=>'master' 
            ],
            [
                'niveau'=>'doctorat' 
             ]
        ]);
    }
}
