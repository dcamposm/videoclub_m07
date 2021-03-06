<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_Genre extends Model
{
    use HasCompositeKey;

    protected $table = 'movie_genre';
    protected $primaryKey = ['id_movies', 'id_genres'];

    public function genres()
    {
        return $this->belongsTo('App\Genre');
    }

    public function movies()
    {
        return $this->belongsTo('App\Movie');
    }
}
