<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListSpecialization extends Model
{

     protected $fillable = [
        'name', 'description'
    ];
        public function services()
    {
        return $this->hasMany('App\Models\Service', 'list_special_id', 'id');
    }
}
