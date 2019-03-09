<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'iso',
        'flag'
    ];

    public function movies()
    {
        return $this->hasMany('App\Movie', 'id', 'country');
    }

    public function directors()
    {
        return $this->hasMany('App\Director', 'id', 'nacionality');
    }

    public function actors()
    {
        return $this->hasMany('App\Actor', 'id', 'nationality');
    }

    public function clients()
    {
        return $this->hasMany('App\Client', 'id', 'nationality');
    }
}
