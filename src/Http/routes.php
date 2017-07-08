<?php

Route::post('gitsync', 'Vonec\Gitsync\Http\Controllers\GitsyncController@hook')->middleware('api');
