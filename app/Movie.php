<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'Movies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'year',
        'director',
        'poster',
        'country',
        'rented',
        'synopsis',
        'time'
    ];

    public function movie_genre()
    {
        return $this->hasMany('App\Movie_Genre', 'id', 'id_movie');
    }


    public function directors()
    {
        return $this->hasMany('App\Directors', 'director', 'id');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'country', 'id');
    }
}
