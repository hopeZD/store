<?php

  use App\Entity\Member;
  
  Route::get('/', function() {
      return Member::all();
  });
