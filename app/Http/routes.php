<?php

use App\Entity\Member;

    Route::get('/', function() {
      return view('login');
    });

    Route::get('/', function() {
        return view('register');
    });


Route::any('/service/validate_code/create', 'Service\ValidateCodeController@create');


