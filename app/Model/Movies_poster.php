<?php

namespace App\Model;
use App\Model\Movies_base;
use Illuminate\Database\Eloquent\Model;

class Movies_poster extends Model
{
    //
    protected $table = 'movies_poster';
    // public function belongsToMovies_base()
    // {
    // 	return $this->belongsTo('App\Model\Movies_base','id','id');
    // }

}
