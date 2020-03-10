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
Route::prefix('account')->group(function() { 
    // Settings
    Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
    Route::patch('/settings', 'SettingsController@update')->name('settings.update');
    Route::patch('/settings/password', 'SettingsController@updatePassword')->name('settings.update_password');
    Route::delete('/settings/avatar', 'SettingsController@deleteAvatar')->name('settings.delete_avatar');
});

