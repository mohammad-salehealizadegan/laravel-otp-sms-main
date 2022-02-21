<?php

namespace Harirsoft\OtpAuth\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use HasFactory;

    protected $table = 'otpcodes';

    public function checkUserExist($request)
    {
        return User::where('mobile',$request['mobile'])->whereNotNull('password')->first();
    }
}
