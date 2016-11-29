<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Plivo\RestAPI;
use Mail;

class SendSms implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;
    protected $sender;
    protected $list;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sender,$list)
    {
         $this->sender = $sender;
        // $this->list = $list;
        // $this->from = env('plivo_from');
        // $this->authid = env('plivo_authid');
        // $this->token = env('plivo_token');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user =  $this->sender;
        Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email)->subject('Your Reminder!');
        });
         
        // $auth_id = $this->authid;
        // $auth_token = $this->token;
        // $p = new RestAPI($auth_id, $auth_token);
        // // Send a message
        // $params = array(
        //         'src' => $this->from, // Sender's phone number with country code
        //         'dst' => $this->list, // receiver's phone number with country code
        //         'text' => 'Hi, Message from Plivo' // Your SMS text message
        //     );
        // // Send message
        // $response = $p->send_message($params);
    }
}
