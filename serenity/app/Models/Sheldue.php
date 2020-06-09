<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sheldue extends Model
{
      protected $fillable = [
        'date', 'price_line_id', 'spec_id'
     ];

     public function pricelist_lines()
    {
        return $this->belongsTo('App\Models\PricelistLine', 'price_line_id', 'id');
    }
}
