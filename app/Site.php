<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
        'name', 'description', 'latitud', 'longitud', 'imagen', 'categoria', 'pais', 'region',
    ];
}
