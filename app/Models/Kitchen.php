<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Customers;

use DB;

class Kitchen extends Model
{
  //table name
    protected $table = 'kitchen_items';

    protected $fillable = [
      'name', 'quantity', 'category'
    ];
    //create the relationships

    //
    public function getKitchenItems(){
      $kitchen = Kitchen::orderBy('id','desc')->paginate(10);
      if (empty($kitchen)) {
        return [];

      }
      return $kitchen;

    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'kitchen_item_id');
    }

}
