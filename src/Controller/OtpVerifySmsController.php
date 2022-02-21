<?php

namespace Harirsoft\OtpAuth\Controller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Harirsoft\OtpAuth\Events\OtpVerifySms;
use Harirsoft\OtpAuth\Models\Otpcode;
use Harirsoft\OtpAuth\Requests\CreateUser;

class OtpVerifySmsController extends Controller
{
    public function otpLogin(CreateUser $createUser)
    {
        $OtpObj = new Otpcode();
        if($OtpObj->checkUserExist($createUser))
            return response()->json(['messsage'=>'this user exist','status'=>0]);
        //create user
        $this->store($createUser);
        $params = [
            'TO'=> $createUser['mobile'] ,
            'USERNAME' => env('smsUserName'),
            'PASSWORD' => env('smsPassword'),
            'DOMAIN' => 'alsatpardakht.com',
            'FROM' => 3000164545
        ];
        OtpVerifySms::dispatch($params);
    }

    public function store($request)
    {
        return User::updateOrCreate([
            'mobile' => $request['mobile']
        ])->permissions()->sync('21');
    }
}
