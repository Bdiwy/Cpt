<?php

namespace App\Listeners;

use App\Events\VedioViewer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Vediolistener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(VedioViewer $event)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(VedioViewer $event)
    {
        $this->updateview($event->evennt);
    }
    function updateview($video){
            

        $video->sitiwation = 1  + $video->sitiwation;
        $video->save();


    }
}
