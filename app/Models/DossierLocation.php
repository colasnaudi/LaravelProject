<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierLocation extends Model
{
    use HasFactory;
    //protected $table = 'dossierlocation';
    protected $fillable = ['idLocation', 'payé'];
    //$timestamps = false;
    protected $primaryKey = 'idLocation';

    public function reservations()
    {
        return $this->belongsTo('App\Reservation');
    }
}
