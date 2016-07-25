<?php

use App\Entity\Member;

    Route::get('/login', function() {
      return view('login');
    });

    Route::get('/register', function() {
        return view('register');
    });


    Route::any('/service/validate_code/create', 'Service\ValidateCodeController@create');
    Route::any('/service/validate_phone/send', 'Service\ValidateCodeController@create');


