<?php

Route::group(['namespace' => 'farnan\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
    Route::get('/contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
    Route::post('/contact/{id}', 'ContactController@update')->name('contact.update');
    Route::delete('/contact/destroy/{id}', 'ContactController@destroy')->name('contact.destroy');
});
