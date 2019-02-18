<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'lastname',
        'bday',
        'nationality'
    ];

    public function movie()
    {
        return $this->hasMany('App\Movie', 'id', 'id');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'nationality', 'id');
    }
}

