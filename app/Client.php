<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'Clients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'dni',
        'name',
        'lastname',
        'bday',
        'nationality',
        'address'
    ];

    public function rents()
    {
        return $this->hasMany('App\Rents', 'id', 'id_client');
    }


    public function comments()
    {
        return $this->hasMany('App\Comments', 'id', 'id_client');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'nationality', 'id');
    }
}
