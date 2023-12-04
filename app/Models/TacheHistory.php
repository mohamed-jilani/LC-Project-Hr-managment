<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacheHistory extends Model
{
    use HasFactory;
    protected $table = 'tache_history';

    protected $fillable = [
        'description',
        'dateCreation',
        'dateRealisationFinal',
        'user_id',
        'etat_id',
    ];
}
