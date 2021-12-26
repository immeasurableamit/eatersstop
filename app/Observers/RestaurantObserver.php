<?php

namespace App\Observers;

use App\Models\Kitchen;
use App\Models\Stock;
use App\Models\Address;

/**
 * Class TeamObserver
 * @package App\Observers
 */
class RestaurantObserver
{
    /**
     * Handle the team "created" event.
     *
     * @return void
     */
    public function created(Address $address)
    {
        $kitchen_items = Kitchen::all();

        foreach ($kitchen_items as $kitchen_item) {
            Stock::factory()->create([
                'kitchen_item_id' => $kitchen_item->id,
                'restaurant_id'  => $address->id,
            ]);
        }
    }

    /**
     * Handle the team "updated" event.
     *
     * @param  \App\Team  $team
     * @return void
     */
    public function updated(Team $team)
    {
        //
    }

    /**
     * Handle the team "deleted" event.
     *
     * @param  \App\Team  $team
     * @return void
     */
    public function deleted(Team $team)
    {
        //
    }

    /**
     * Handle the team "restored" event.
     *
     * @param  \App\Team  $team
     * @return void
     */
    public function restored(Team $team)
    {
        //
    }

    /**
     * Handle the team "force deleted" event.
     *
     * @param  \App\Team  $team
     * @return void
     */
    public function forceDeleted(Team $team)
    {
        //
    }
}
