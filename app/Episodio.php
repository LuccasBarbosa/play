<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Episodio extends Authenticatable
{
    use Notifiable;

    public function personagem() {
        return $this->hasOne('App\Personagem');
    }

    public function questions() {
        return $this->hasMany('App\Question');
    }

    // protected $casts = [
    //     'eixo' => 'array',
    // ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bimestre', 'texto', 'id_personagem', 'id_serie', 'url_jogo', 'url_video', 'foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}
