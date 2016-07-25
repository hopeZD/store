<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;
use App\Http\Requests\Request;
use App\Tool\SMS\SendTemplateSMS;

class ValidateCodeController extends Controller
{
    public function create($value = '')
    {
        $validateCode = new ValidateCode;
        return $validateCode->doimg();
    }

    public function sendSMS($value = '')
    {
        $code = '';
        $sendTemplateSMS = new SendTemplateSMS;

        $charset = '1234567890';
        $_len = strlen($charset) -1;
        for($i = 0; $i < 6; $i++){
            $code .= $charset[mt_rand(0, $_len)];
        }

        $sendTemplateSMS->sendTemplateSMS("18810256225", array(code, 60), 1);
        return 'XX';
    }


}
