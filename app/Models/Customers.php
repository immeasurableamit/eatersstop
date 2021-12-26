<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
      //table name
      protected $table = 'customers';

      protected $fillable = ['full_name', 'mobile_no', 'location'];

      //get customers
      public function getCustomers(){
        $customers = Customers::orderBy('id','desc')->paginate(10);
        if (empty($customers)) {
          return [];

        }
        return $customers;

      }
      public function countCustomers(){
        $customers = Customers::wherein('status',[0,1])->count();
        if (empty($customers)) {
          return '0';
        }
        return $customers;
      }


}
