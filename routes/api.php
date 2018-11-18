<?php
use Illuminate\Http\Request;
use App\Member;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('members', 'MembersController', ['except' => ['create', 'edit']]);
});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('zip2addr', 'Zip2AddressController');
});
