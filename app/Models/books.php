<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;
use Carbon\Carbon;

class Books extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $fillable = [
        'title',
        'author',
        'description',
        'isbn',
        'published year',
       
    ];
    protected $appends = ['Author', 'Isbn'];
    public function getAuthorAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
    
    // public function getBirthdayAttributes()
     //{
       // $birthdate = $this->attributes['birthdate'];
        //if($birthdate) {
         //  return Carbon::parse($birthdate)->format('F d, Y');
        //}
        //return '';
     // }

    public function books()
    {
      return $this->hasMany(Books::class, 'books_id');
   }
}


