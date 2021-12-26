<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Stock extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'stocks';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'restaurant_id',
        'kitchen_item_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'current_stock',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }

    public function kitchen()
    {
        return $this->belongsTo(Kitchen::class, 'kitchen_item_id');

    }

    public function restaurant()
    {
        return $this->belongsTo(Address::class, 'restaurant_id');

    }
}
