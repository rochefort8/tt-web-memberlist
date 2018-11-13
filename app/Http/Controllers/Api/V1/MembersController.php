<?php

namespace App\Http\Controllers\Api\V1;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MembersController extends Controller
{
    public function index()
    {
	$query = Member::query();

	$email = Input::get('email');
	if (!empty($email)) {
	   $query->where('email','like','%'.$email.'%');
        }

	$members = $query->paginate();


	return $members ;
    }

    public function show($id)
    {
        return Member::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->all());

        return $member;
    }

    public function store(Request $request)
    {
        $member = Member::create($request->all());
        return $member;
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return '';
    }
}
