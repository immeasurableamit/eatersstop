<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookTable;

class BookTable extends Model
{
    use HasFactory;

    protected $table = 'book_table';

    protected $fillable = [
        'customer_name',
        'email',
        'message',
        'gust_number',
        'phone_number',
        'meal_time',
        'date'
    ];


    public function foodcategory(){

      return $this->belongsTo('App\Models\FoodCategory', 'meal_time', 'id');
    }
    public function getBookedTables(){
      $table = BookTable::orderBy('id','desc')->paginate(10);
      if (empty($table)) {
        return [];
      }
      return $table;
    }
}
