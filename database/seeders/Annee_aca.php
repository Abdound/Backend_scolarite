<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Annee_aca extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //DB::table('formations')->delete();
                DB::table('annee_acas')->truncate();
                DB::table('annee_acas')->insert([
                    [
                        'annees'=>'2021-2022'
                    ],
                    [
                        'annees'=>'2022-2023'
                    ],
                    [
                        'annees'=>'2023-2024'
                    ]
                ]);
    }
}
