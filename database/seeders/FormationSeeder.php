<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('formations')->delete();
        DB::table('formations')->truncate();
        DB::table('formations')->insert([
            [
                'intitule'=>'math'
            ],
            [
                'intitule'=>'physique'
            ],
            [
                'intitule'=>'informatique'
            ]
        ]);
    }
}
