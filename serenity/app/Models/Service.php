<?php

namespace App\Models;
use App\Models\ListSpecialization;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'name', 'description', 'list_special_id'
    ];
      public function pricelists()
    {
        return $this->belongsToMany('App/Models/Pricelist', 'pricelist_lines', 'service_id', 'pricelist_id');
    }

    public function list_specializations()
    {
        return $this->belongsTo('App\Models\ListSpecialization', 'list_special_id', 'id');
    }


}

