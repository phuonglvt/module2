<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'name',
        'author',
        'status',
        'subject',
        'category_id',
    ];

    public function borrowers()
    {
        return $this->hasMany('App\Borrower','borrower_id','id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}