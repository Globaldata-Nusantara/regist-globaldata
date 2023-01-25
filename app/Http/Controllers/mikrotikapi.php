<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class mikrotikapi extends Controller
{
    public function index(){
         $client = new Client();
         $response = $client->request('GET','https://core.tulangbawangkab.go.id/rest/ip/address',[
            'auth' => ['duplex', '#P4ssw0rd#1234']
         ]);
         $data = json_decode($response->getBody());
         dd($data);
         return view('index', ['data' => $data]);
         $statusCode = $response->getStatusCode();
    }

    public function regl2tp(Request $req){
        $client = new Client();
        $response = $client->request('PUT','https://core.tulangbawangkab.go.id/rest/ppp/secret',[
           'auth' => ['duplex', '#P4ssw0rd#1234'],
           'json' => [
            'name' => $req->name,
            'password' => $req->password,
            'service' => 'l2tp',
            'profile' => 'L2TP'
           ]
        ]);

        return view('home');

    }

    public function regike2(Request $req){
        $client = new Client();
        $response = $client->request('PUT','https://core.tulangbawangkab.go.id/rest/certificate',[
           'auth' => ['duplex', '#P4ssw0rd#1234'],
           'json' => [
            'name' => $req->name,
            'common-name' => $req->name,
            'days-valid' => $req->dayvalid,
            'key-usage' => 'tls-client'
           ]
        ]);

        return view('home');

    }
}