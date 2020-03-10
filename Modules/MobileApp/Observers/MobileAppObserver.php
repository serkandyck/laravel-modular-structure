<?php

namespace Modules\MobileApp\Observers;

use Modules\MobileApp\Entities\MobileApp;
use Modules\GitLab\Jobs\SetupGit;

class MobileAppObserver
{
    /**
     * Handle the mobile app "created" event.
     *
     * @param  \App\MobileApp  $mobileApp
     * @return void
     */
    public function created(MobileApp $mobileApp)
    {
        SetupGit::dispatch($mobileApp);
    }

    /**
     * Handle the mobile app "updated" event.
     *
     * @param  \App\MobileApp  $mobileApp
     * @return void
     */
    public function updated(MobileApp $mobileApp)
    {
        //
    }

    /**
     * Handle the mobile app "deleted" event.
     *
     * @param  \App\MobileApp  $mobileApp
     * @return void
     */
    public function deleted(MobileApp $mobileApp)
    {
        //
    }

    /**
     * Handle the mobile app "restored" event.
     *
     * @param  \App\MobileApp  $mobileApp
     * @return void
     */
    public function restored(MobileApp $mobileApp)
    {
        //
    }

    /**
     * Handle the mobile app "force deleted" event.
     *
     * @param  \App\MobileApp  $mobileApp
     * @return void
     */
    public function forceDeleted(MobileApp $mobileApp)
    {
        //
    }
}
