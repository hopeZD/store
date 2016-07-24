<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;

class ValidataCodeController extends Controller
{
    public function create($value = '')
    {
        $validateCode = new ValidateCode;
        return $validateCode->doimg();
    }
}
