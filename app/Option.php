<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Option extends Authenticatable
{
    use Notifiable;

    public function questions() {
        return $this->belongsTo('App\Question');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_bimestre', 'id_question', 'answer1', 'answer2', 'answer3','answer4',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
