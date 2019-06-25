<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable =[
        'name',
//        'customers_id'
        ];

    public function Customer()
    {
        return $this->hasMany('App\Customer');
    }
}