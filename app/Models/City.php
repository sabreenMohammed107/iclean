<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
 
    protected $fillable = [
        'title_en','title_ar',
       ];
       public $table="cities";
}
