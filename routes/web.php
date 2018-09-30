<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/sample', function() {
//     return view('app.app')
//         ->with([
//             'pageTitle' => 'サンプル',
//             'viewName' => 'sample',
//         ]);
// });

Route::get('/', function() {
    return view('app.app')
        ->with([
            'pageTitle' => 'トップ',
            'viewName' => 'top',
        ]);
});
