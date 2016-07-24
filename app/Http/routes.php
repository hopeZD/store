<?php

use App\Entity\Member;

Route::get('/', function() {
  return view('login');
});


Route::any('Service/validate_code/create', 'Service\ValidateCodeController@create');


