<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Etudiants')->delete();
        $currentTimestamp=Carbon::now();
        DB::table('Etudiants')->insert([
            [
                'code_etu'=> 'P28950',
                'ine'=>'AK123sgvs',
                'nom'=>'Ndiaye',
                'prenom'=>'Abdou',
                'mail_ugb'=>'ndiaye.abdou9@ugb.edu.sn',
                'date_naiss_etu'=>'1990-09-13',
                'created_at'=>$currentTimestamp,
                'updated_at'=>$currentTimestamp,
                'lieu_naiss_etu'=>'Diourbel',
                'sexe'=>'M',
                'adresse_etu'=>'VillageK'
            ],
            [
                'code_etu'=> 'P28990',
                'ine'=>'AK123diarra',
                'nom'=>'Dieng',
                'prenom'=>'Diarra',
                'mail_ugb'=>'dieng.diarra@ugb.edu.sn',
                'date_naiss_etu'=>'2021-09-13',
                'created_at'=>$currentTimestamp,
                'updated_at'=>$currentTimestamp,
                'lieu_naiss_etu'=>'Rufique',
                'sexe'=>'F',
                'adresse_etu'=>'VillageB'
            ],
            [
                'code_etu'=> 'P30999',
                'ine'=>'AK123OIU',
                'nom'=>'Diaw',
                'prenom'=>'Lamine',
                'mail_ugb'=>'diaw.lamine@ugb.edu.sn',
                'date_naiss_etu'=>'2034-10-13',
                'created_at'=>$currentTimestamp,
                'updated_at'=>$currentTimestamp,
                'lieu_naiss_etu'=>'Kaolack',
                'sexe'=>'M',
                'adresse_etu'=>'VillageD'
            ]

        ]);
    }
}
