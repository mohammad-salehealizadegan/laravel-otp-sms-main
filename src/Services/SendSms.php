<?php

namespace Harirsoft\OtpAuth\Services;

use SoapClient;
use Illuminate\Support\Facades\Http;

class SendSms
{
    public static function sendCodeWithHttp($url,$params)
    {
        if(!is_array($params))
            return response()->json(['message'=>'your data structure is not valid'],405);
        $code = $params['code'] ?? str_pad(mt_rand(0000, 9999), 4, '0', STR_PAD_LEFT);
        $params['message'] = $params['message'] ?? " کد اهراز هویت شما {$code} ".env('APP_NAME');
        $response = Http::withOptions([
            'verify' => false,
        ])->post($url, $params);
        return response()->json($response);
    }
}
