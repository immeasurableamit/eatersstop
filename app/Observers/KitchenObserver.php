<?php

namespace App\Observers;

use App\Models\Kitchen;
use App\Models\Stock;
use App\Models\Address;

/**
 * Class AssetObserver
 * @package App\Observers
 */
class KitchenObserver
{
    /**
     * Handle the asset "created" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function created(Kitchen $kitchen)
    {
        $restaurants  = Address::all();

        foreach ($restaurants as $restaurant) {
            Stock::factory()->create([
                'kitchen_item_id' => $kitchen->id,
                'restaurant_id'  => $restaurant->id,
            ]);
        }
    }

    /**
     * Handle the asset "updated" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function updated(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "deleted" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function deleted(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "restored" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function restored(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "force deleted" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function forceDeleted(Asset $asset)
    {
        //
    }
}
