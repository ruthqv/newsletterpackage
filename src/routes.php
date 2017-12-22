<?php 

Route::post('newsletter', 'newsletter\newslettersystem\NewsletterController@newsletter')->name('newsletter');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function() {

 
    Route::get('newsletter', 'newsletter\newslettersystem\NewsletterController@showall')->name('newsletter');

    Route::any('destroy/{newsletter}', 'newsletter\newslettersystem\NewsletterController@destroy')->name('newsletter.destroy');

    Route::any('newsletter/create', 'newsletter\newslettersystem\NewsletterController@create')->name('newsletter.create');
   
    Route::any('newsletter/store', 'newsletter\newslettersystem\NewsletterController@store')->name('newsletter.store');

    Route::any('newsletter/update/{subscriptor}', 'newsletter\newslettersystem\NewsletterController@update')->name('newsletter.update');

    Route::any('newsletter/{subscriptor}', 'newsletter\newslettersystem\NewsletterController@show')->name('newsletter.show');

});