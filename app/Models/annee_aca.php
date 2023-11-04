<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annee_aca extends Model
{
    use HasFactory;

    protected $table = 'annee_acas';

    protected $fillable = ['annees'];

}
