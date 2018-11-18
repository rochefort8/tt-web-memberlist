<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;

class Zip2AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zipcode = Input::get('zipcode');
        if (empty($zipcode)) {
            return null;
        }
        $client = new Client();
        $url = 'http://zipcloud.ibsnet.co.jp/api/search?zipcode=' . $zipcode;
        $res = $client->request('GET', $url);
        \Log::info($res->getStatusCode());
        // "200"
        \Log::info($res->getHeader('content-type'));
        // 'application/json; charset=utf8'
        \Log::info($res->getBody());
        return $res->getBody();   
    }
}
