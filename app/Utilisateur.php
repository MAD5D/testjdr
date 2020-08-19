<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class Utilisateur extends Authenticatable
{
    use Notifiable;
	protected $table = 'utilisateur';
    

    public function getPasswordAttribute() {
        return $this->mot_de_passe;
    }
}
