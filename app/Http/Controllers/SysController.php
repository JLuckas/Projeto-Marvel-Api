<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SysController extends Controller
{
    private $url = 'http://gateway.marvel.com:443/v1/public';
    public function index($offset=0){

       $public_key = '26b8d7455b2c1c787fd1a643c7126507';
        $private_key = '95aaaaa82df23f2de1b6f321b5748993370ade5b';

        $ts = time();
        $hash = md5($ts.$private_key.$public_key);

        $url = config('app.guzzle_test_url') . 'characters?offset='. $offset.'&'.'apikey='. $public_key. '&ts='.$ts.'&hash='.$hash;

        //var_dump($this->makeRequest($url));exit;

        $result = json_decode($this->makeRequest($url));
        /*if(!isset($result->data)){
            abort(404);
        }*/
        $total = $result->data->total;
        $result = $result->data->results;

        return view('index', ['result'=>$result, 'offset'=>$offset, 'total'=>$total]);
    }
    public function search(){

        $public_key = '26b8d7455b2c1c787fd1a643c7126507';
        $private_key = '95aaaaa82df23f2de1b6f321b5748993370ade5b';

        $ts = time();
        $hash = md5($ts.$private_key.$public_key);

        $offset = 0;
        $name = $_GET['name'];
        $url = config('app.guzzle_test_url').'characters?nameStartsWith='. $name.'&'. 'apikey='. $public_key. '&ts='.$ts.'&hash='.$hash;

        $result = json_decode($this->makeRequest($url));
        $total = $result->data->total;
        if(!isset($result->data)){
            abort(404);
        }
        $result = $result->data->results;

        return view('listabusca', ['result'=>$result, 'offset'=>$offset, 'total'=> $total]);


    }

    public function store(){

    }

    public function character($id){

        $public_key = '26b8d7455b2c1c787fd1a643c7126507';
        $private_key = '95aaaaa82df23f2de1b6f321b5748993370ade5b';

        $ts = time();
        $hash = md5($ts.$private_key.$public_key);


        $url = config('app.guzzle_test_url').'characters/'.$id.'?'.'apikey='. $public_key. '&ts='.$ts.'&hash='.$hash;

        $result = json_decode($this->makeRequest($url));
        if(!isset($result->data)){
            abort(404);
        }
        $result = $result->data->results;
        return view('personagem', ['result'=>$result]);
    }

   /*public function generateURL($url){


        $public_key = '26b8d7455b2c1c787fd1a643c7126507';
        $private_key = '95aaaaa82df23f2de1b6f321b5748993370ade5b';

        $ts = time();
        $hash = md5($ts.$private_key.$public_key);

        return $url.'apikey='. $public_key. '&ts='.$ts.'&hash='.$hash;
    }*/

    public function makeRequest($url){
        $curl = curl_init();

        $data_url = $url;

        curl_setopt_array ($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $data_url
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
