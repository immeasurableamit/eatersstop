<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
      //table name
      protected $table = 'banners';

      public function getBanners(){
        $banners = Banners::orderBy('id','desc')->paginate(10);
        if (empty($banners)) {
          return [];

        }
        return $banners;
      }
}
