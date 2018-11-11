<?php
use Illuminate\Http\Request;
use App\Member;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('members', 'MembersController', ['except' => ['create', 'edit']]);
});

Route::middleware('api')->get('/v1/members', function(Request $request) {
    return Member::paginate();
});