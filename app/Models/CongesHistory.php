<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongesHistory extends Model
{
    use HasFactory;
    protected $table = 'history_conges';

    public $timestamps = false;

    /*
    demandeDeConges(id, subject, created_at, finished_at, #user_id)
    */
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'created_at',
        'finished_at',
        'etat',
        'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
