<?php

//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Customer extends Model
//{
//    public function city()
//    {
//        return $this->belongsTo('App\City');
//    }

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name'
    ];
}


