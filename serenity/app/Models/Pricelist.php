<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
      public function services()
    {
        return $this->belongsToMany('App/Models/Service', 'pricelist_lines', 'pricelist_id', 'service_id');
    }
}
