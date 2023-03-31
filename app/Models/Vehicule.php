<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    //protected $table = 'vehicule';
    protected $fillable = ['matricule', 'modele', 'nombredeplace', 'prix', 'disponibilite'];
    //$timestamps = false;
    protected $primaryKey = 'matricule';

    public function reservations()
    {
        return $this->belongsToMany('App\Reservation');
    }
}
