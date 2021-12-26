<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
use App\Models\Orders;


use DB;

class Menu extends Model
{
  //table name
    protected $table = 'menu';

    protected $fillable = [
      'name',
      'description',
      'price',
      'category_id',
      'cover_image',
      'uploaded_by'
    ];
    //create the relationships
    public function menu(){

      return $this->belongsTo('App\Models\FoodCategory', 'category_id', 'id');
      // return $this->belongsTo('App\Models\FoodCategory');
    }
    //get menu
    public function getMenu(){
      $menu = Menu::where('status',1)->orderBy('id','desc')->paginate(10);
      if (empty($menu)) {
        return [];

      }
      return $menu;

    }
    public function countMenu(){
      $menu = Menu::wherein('status',[0,1])->count();
      if (empty($menu)) {
        return '0';
      }
      return $menu;
  }

  public function getTrendingMenu_ids(){
    $newArray = [];
    $trending_menus = DB::SELECT('
        SELECT
            menu_id
        FROM
          orders
      ');
      foreach ($trending_menus as $key => $value) {
        $newArray[] = $trending_menus[$key]->menu_id;
      }

      $implode = (implode(',',$newArray));
      $menu_ids = str_replace(array('[',']'),'',explode(',',$implode));
      $menu_count = array_count_values($menu_ids);
      arsort($menu_count);
      $trending_menu_ids = array_slice(array_keys($menu_count), 0, 5, true);

      if (!empty($trending_menu_ids)) {
        $trending_menu = $this->getTrendingMenus($trending_menu_ids);
        if (!empty($trending_menu)){
            return $trending_menu;
        }

        return [];
      }
      return [];

  }

  public function getTrendingMenus($menu_ids){

    return  Menu::whereIn('id',$menu_ids)->get();
  }

  public static function getMenus($id){

    $orders = Orders::find($id);

    $menus = Menu::whereIn('id',json_decode($orders->menu_id))->pluck('name');

    return str_replace(array('[',']'),'',$menus);

  }

}
