<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory, Notifiable;
    //table name
      protected $table = 'orders';

      public function customer(){

        return $this->belongsTo('App\Models\Customers', 'customer_id', 'id');
        // return $this->belongsTo('App\Models\FoodCategory');
      }

      public  static function customersExpenditure($customer_id){
        $total = Orders::where('customer_id',$customer_id)->where('status',1)->sum('total_amount');
        if ($total > 1){
          return $total;
        }
        return 0.00;

      }

      public function countOrders(){
        $orders = Orders::wherein('status',[0,1])->count();
        if (empty($orders)) {
          return '0';
        }
        return $orders;
      }

      public function getAllOrders(){
        $orders = Orders::orderBy('id','desc')->paginate(10);
        if (empty($orders)) {
          return [];

        }
        return $orders;

      }


    public function routeNotificationForWhatsApp($phone_number)
    {
      return $phone_number;
    }

}
