<?php


Auth::routes();
Route::get('verification/error', 'Auth\RegisterController@getVerificationError');
Route::get('verification/{token}', 'Auth\RegisterController@getVerification');


Route::get('/id', function () {
    dd(Auth::id());
});

Route::post('/send', 'RemindersController@Sendreminder');

Route::post('/contact-us', function () {
    return response()->json('success');
});

Route::get('/remind', function () {
    $groups = Auth::user()->groups->implode('name', ',');
    return View('admin.sendsms')->with('groups',$groups);
});

Route::get('/contacts', 'ContactController@index');




Route::get('/', 'HomeController@homeindex');
Route::get('/reset','Auth\ForgotPasswordController@showLinkRequestForm');



Route::get('getstate', 'api\\ApiController@getstate');
Route::get('getcity', 'api\\ApiController@getcity');
Route::post('/verifynewuser', 'api\\ApiController@verifyphone');


Route::get('/bregister', function () {
    $countryModel = WorldCountries::getCountryModel();

    $countries = $countryModel->pluck('name' ,'id')->toarray();
    return view('authi.register')->with('countries', $countries);
})->middleware('guest');
Route::get('/pregister', function () {
    $countryModel = WorldCountries::getCountryModel();

    $countries = $countryModel->pluck('name' ,'id')->toarray();
    return view('authi.register')->with('countries', $countries);
})->middleware('guest');




Route::get('pendingverification', 'UsersController@notverified');


Route::group(['middleware' => ['auth', 'verified'] ], function () {
    Route::post('groups/adduser', 'GroupsController@attachuser');
     Route::post('groups/removeuser', 'GroupsController@removeuser');
    Route::get('dashboard', 'HomeController@index');

    Route::get('profil/{id}', 'UsersController@edit');
    Route::PUT('profil/update/{id}', 'UsersController@Update')->name('profil/update');
    Route::post('groups/{id}', 'GroupsController@destroy');
    
    Route::resource('groups', 'GroupsController');
    Route::resource('teams', 'TeamsController');
    
    Route::get('ingroups', 'GroupsController@ingroups');
    Route::post('groups/removeuser', 'GroupsController@removeuser');
    Route::get('groups/{id}/adduser', 'GroupsController@showadduser');

    Route::delete('contacts/{id}', 'ContactController@destroy');
    
});





