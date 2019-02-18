<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
	use HasCompositeKey;

    protected $table = 'rents';
    protected $primaryKey = ['id_movie', 'id_client'];

    protected $fillable = [
        'date_rent',
        'date_return_rent',
        'price'
    ];

    public function clients()
    {
        return $this->belongsTo('App\Client', 'id_client', 'id');
    }

    public function movies()
    {
        return $this->belongsTo('App\Movie', 'id_movie', 'id');
    }
}
