<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\inscriptions;


class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';

    protected $fillable = ['niveau_id','formation_id','annee_aca_id','etudiant_id'];

    
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

}
