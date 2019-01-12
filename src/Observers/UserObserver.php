<?php

namespace Waygou\BrunoFalcao\Observers;

use Waygou\BrunoFalcao\Models\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the user "saving" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function saving(User $user)
    {
        //
    }

    /**
     * Handle the user "saved" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function saved(User $user)
    {
        //
    }

    /**
     * Handle the user "updating" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function updating(User $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
