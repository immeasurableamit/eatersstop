<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Customers;

use DB;

class KitchenAssignment extends Model
{
  //table name
    protected $table = 'kitchen_assignment';

    protected $fillable = [
      'kitchen_item_id', 'quantity'
    ];
    //create the relationships

    //
    public function getKitchenItems(){
      $kitchen = KitchenAssignment::orderBy('id','desc')->paginate(10);
      if (empty($kitchen)) {
        return [];

      }
      return $kitchen;

    }

}
