<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Plivo\PlivoChannel;
use NotificationChannels\Plivo\PlivoMessage;

class Smsverification extends Notification
{
	use Queueable;
	
	
	/**
	* Create a new notification instance.
	     *
	     * @return void
	     */
	    public function __construct($number)
	    {
            $this->vn = $number;
		//
	}
	public function via($notifiable)
	{
		return [PlivoChannel::class];
	}
	
	public function toPlivo($notifiable)
	{
		return (new PlivoMessage)
		                    ->content('RemindTree verification code :' . $this->vn);
	}
	
	
	/**
	* Get the array representation of the notification.
	     *
	     * @param  mixed  $notifiable
	     * @return array
	     */
	    public function toArray($notifiable)
	    {
		return [
		            //
		];
	}
}
