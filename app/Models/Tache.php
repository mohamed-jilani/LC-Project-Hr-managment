<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table = 'tache';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    /*
    tache(id, description, datecreation, dateRealisationFinal, #user_id, #etat_id)
    */
    protected $fillable = [
        'description',
        'dateCreation',
        'dateRealisationFinal',
        'user_id',
        'etat_id',
    ];


    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

}