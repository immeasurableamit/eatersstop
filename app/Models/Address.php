<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Address extends Model
{
    use HasFactory;

    protected $table = 'restaurant_address';

    protected $fillable = [
        'name',
        'email',
        'street',
        'location',
        'phone_number',
    ];

    public static function getRestaurantAddress()
    {
        $rest_address = DB::table('restaurant_address')->pluck("name","id");
        if (empty($rest_address)) {
          return [];

        }
        return $rest_address;
    }

    public static function getAddress()
    {
        $default_address = DB::table('restaurant_address')->first();
        if (empty($default_address)) {
          return [];

        }
        return $default_address;
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
