<?php

namespace App\Http\Controllers\Api\V1;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index()
    {
        return Member::all();
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
