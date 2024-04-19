<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    function index(){
        $token=session('token');
        $response=Http::withToken($token)->
            get(env('API_URL').'/api/posts');

            $data=json_decode($response->body(),true);
            $data=$data['data'];

        return view('dashboard',[
            'data'=>$data
        ]);
    }
}
