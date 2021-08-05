<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Question extends Authenticatable
{
    use Notifiable;

    public function episodios() {
        return $this->belongsTo('App\Episodio');
    }

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_bimestre', 'pergunta', 'answer1', 'answer2', 'answer3', 'answer4'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
