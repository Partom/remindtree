<?php

namespace App\Listeners;

use App\Events\Status;
use User;
class StatusListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function handle($event)
    {
      //Session::put($event->user->id,$event->user->verified);
    }






}