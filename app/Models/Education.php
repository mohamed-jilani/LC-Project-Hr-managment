<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table ="education";
    /*
    education(id, niveau, certification, graduationYear, #user_id)
    */
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'niveau',
        'certification',
        'graduationYear',
        'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
