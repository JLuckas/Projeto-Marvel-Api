<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SysController extends Controller
{


    public function index($offset=0){
        $url = config('app.guzzle_test_url').'characters?offset='. $offset.'$';
        $result = json_decode($this->makeRequest($url));
        if(!isset($result->data)){
            abort(404);
        }
        $total = $result->data->total;
        $result = $result->data->results;
        return view('index',['result'=>$result, 'offset'=>$offset, 'total'=>$total]);
    }
    public function search($name){

        $offset = 0;
        $name = $_GET['name'];
        $url = config('app.guzzle_test_url').'characters?nameStartsWith='. $name.'&';

        $result = json_decode($this->makeRquest($url));
        $total = $result->data->total;
        if(!isset($result->data)){
            abort(404);
        }
        $result = $result->data->results;

        return view('index', ['result'=>$result, 'offset'=>$offset, 'total'=> $total]);


    }
}
