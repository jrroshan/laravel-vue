<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return response()->json([
            'msg'=>'This is not a msg'
        ]);
    }

    public function test(){
        return response()->json([
            'msg'=>'some error occured'
        ],422);
    }
}
