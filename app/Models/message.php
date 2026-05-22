<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //
    protected $fillable = [
        'subject','email','phone','message','name','created_at','updated_at'
       ];
       public $table="messages";

}
