<?php

namespace App\Http\Controllers;

class MembersController extends Controller
{
    public function index()
    {
        return view('admin.members.index');
    }
}
