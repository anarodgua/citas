<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name','surname', 'email', 'password','userType','nuhsa','especialidad_id',
        'medico_id','poliza_id','centroSanitario_id'];


    public function poliza()
    {
        return $this->belongsTo('App\Poliza');
    }
    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }
    public function centroSanitario()
    {
        return $this->belongsTo('App\CentroSanitario');
    }
    public function citas()
    {
        return $this->hasMany('App\Cita');
    }


    protected $hidden = ['password', 'remember_token'];
}
