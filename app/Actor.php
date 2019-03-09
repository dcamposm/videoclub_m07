<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'lastname',
        'bday',
        'image',
        'nationality'

    ];

    public function movie_actor()
    {
        return $this->hasMany('App\Movie_Actor', 'id', 'id_actor');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'nationality', 'id');
    }
}
