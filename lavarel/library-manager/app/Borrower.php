<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $table = 'borrowers';

    public function books()
    {
        return $this->belongsTo('App\Book','book_id','id');
    }
}
