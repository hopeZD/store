<?php

use App\Entity\Member;

Route::get('/', function() {
  return view('login');
});


Route::any('/service/validate_code/create', 'Service\ValidateCodeController@create');


