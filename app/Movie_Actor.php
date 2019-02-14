<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_Actor extends Model
{
    protected $table = 'movie_actor';
    protected $primaryKey = (['id_movie', 'id_actor']);

    protected $fillable = [
        'character'
    ];

    public function actors()
    {
        return $this->belongsTo('App\Actor', 'id_actor', 'id');
    }

    public function movies()
    {
        return $this->belongsTo('App\Movie', 'id_movie', 'id');
    }
}
