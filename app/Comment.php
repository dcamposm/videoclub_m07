<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	use HasCompositeKey;

    protected $table = 'comments';
    protected $primaryKey = ['id_movie', 'id_client'];

    protected $fillable = [
        'date_comment',
        'rate_movie',
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
