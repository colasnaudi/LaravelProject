<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    //protected $table = 'reservation';
    protected $fillable = ['codeReservation', 'dateReservation', 'dateAller', 'dateRetour'];
    //$timestamps = false;
    protected $primaryKey = 'codeReservation';

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function vehicules()
    {
        return $this->belongsToMany('App\Vehicule');
        // return $this->belongsToMany('Vehicule::class');
    }

    public function dossierLocation()
    {
        return $this->hasOne('App\DossierLocation');
    }
}
