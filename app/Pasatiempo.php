<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasatiempo extends Model
{
    //

  

    protected $table='pasatiempo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function user(){

        return $this->belongsTo('App\User','id');
    }


}
