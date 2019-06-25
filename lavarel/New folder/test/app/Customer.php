<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'fullName',
        'dayRegistration',
        'CMND',
        'address',
        'phone',
        'email',
        'installationAddress',
        'services_id',
        'note'
    ];
    public function Service()
    {
        return $this->belongsTo('App\Service');
    }
}