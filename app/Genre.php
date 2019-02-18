<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'lastname',
        'description'
    ];

    public function movies()
    {
        return $this->hasMany('App\Movie_Genres', 'id', 'id_genres');
    }
}
