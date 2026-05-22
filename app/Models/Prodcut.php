<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodcut extends Model
{
    //

    protected $fillable = [
        'title_en','title_ar','details_en','details_ar','image_cover','VideoUrl','created_at','updated_at'
       ];
       public $table="products";
       


}
