<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricelistLine extends Model
{
     protected $fillable = [
        'cost', 'service_id', 'pricelist_id'
     ];

     public function services()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }

      public function sheldues()
    {
        return $this->hasMany('App\Models\Sheldue', 'price_line_id', 'id');
    }

     public function pricelists()
    {
        return $this->belongsTo('App\Models\Pricelist', 'pricelist_id', 'id');
    }
}
