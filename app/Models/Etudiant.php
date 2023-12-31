<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';

    protected $fillable = ['code_etu', 'ine', 'nom', 'prenom', 'mail_ugb', 'date_naiss_etu','lieu_naiss_etu','sexe','adresse_etu'];
}
