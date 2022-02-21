<?php

namespace Harirsoft\OtpAuth\Listeners;

use Harirsoft\OtpAuth\Events\OtpVerifySms;
use Harirsoft\OtpAuth\Services\SendSms;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifySmsListener implements ShouldQueue
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

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OtpVerifySms $params)
    {
        SendSms::sendCodeWithHttp('https://www.0098sms.com/sendsmslink.aspx',$params);
    }
}
