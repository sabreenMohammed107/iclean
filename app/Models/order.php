<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = [
        'product_name',
        'user_name',
        'qty',
        'phone',
        'city_id',
        'status_id',
        'notes',
        'seller_name',
        'created_at',
        'updated_at'
       ];
       public $table="orders";
       public function city()
       {
           return $this->belongsTo(City::class, 'city_id');
       }
       public function status()
       {
           return $this->belongsTo(Status::class, 'status_id');
       }

}
