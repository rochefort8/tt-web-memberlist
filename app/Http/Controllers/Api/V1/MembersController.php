<?php

namespace App\Http\Controllers\Api\V1;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use GuzzleHttp\Client;

class MembersController extends Controller
{
    public function index()
    {
        $query = Member::query();
        $params = Input::get();
        \Log::info($params);

        $keywords = [ 'email', 'address', 'graduate', 'junior_high_school', 'club'];
        foreach($keywords as $str) {   
            if (!empty($params[$str])) {
                $value = $params[$str] ;
                $query->where($str,'like','%'.$value.'%');
            }    
        }
        $str = 'phone' ;
        if (!empty($params[$str])) {
            $query->where('phone1','like','%'.$value.'%');
            $query->orWhere('phone2','like','%'.$value.'%');
        }
      
        $str = 'name' ;
        if (!empty($params[$str])) {
            $value = mb_convert_kana($params[$str],'KC','UTF-8') ;

            $query->where('first_name_kanji','like','%'.$value.'%');
            $query->orWhere('last_name_kanji','like','%'.$value.'%');
            $query->orWhere('first_name_kana','like','%'.$value.'%');
            $query->orWhere('last_name_kana','like','%'.$value.'%');
        }
//        $query->orderBy('last_name_kana','asc');
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
