<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Customers;

class FoodCategory extends Model
{
    //table name
      protected $table = 'food_categories';

      //get customers
      public function getFoodCategory(){
        $food_category = FoodCategory::where('status',1)->orderBy('id','desc')->get();
        if (empty($food_category)) {
          return [];

        }
        return $food_category;

      }
}
