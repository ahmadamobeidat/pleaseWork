<?php

use Illuminate\Support\Facades\Route;

Route::resource('/news', 'DevLabs\Newscrud\Controllers\NewsAdminBackendController');
