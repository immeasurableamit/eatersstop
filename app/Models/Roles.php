<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Customers;
use DB;

class Roles extends Model
{
    //table name
  protected $table = 'roles';


  public static function getRoles()
  {
      $roles = DB::table('roles')->pluck("name","id");
      if (empty($roles)) {
        return [];

      }
      return $roles;
  }

}
