<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //protected $table = 'client';
    protected $fillable = ['numeroClient', 'nom', 'email', 'carteBancaire'];
    //$timestamps = false;
    protected $primaryKey = 'numeroClient';

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
