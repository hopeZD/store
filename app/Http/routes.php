<?php

  use App\Member;
  Route::get('/', function() {
    return Member::all();
  })
